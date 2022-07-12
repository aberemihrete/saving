<?php
include('connection.php');  
?>
<!DOCTYPE html>
<html>
<head>
	<title>view information</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">
          </script>
   <script type="text/javascript">
  function validate()
  {  
    if(form.id.value=="")
    {
alert("plase enter id you wont to searching");
form.id.focus();
return false;
}
}
</script>
</head>
<body>
	<br><br>

<a href="clinic.php" align="center">back to menu</a>
<center>
<form name ="form"action="show.php " method="post">
	<div class="row col-md-5 col-md-offset-2">
<header class="bg-primary text-white text-center text-italic text-time News Romane">
    <h2>View And Search customer Information form</h2>
    </header>
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%"> 
<tr><td>Enter user id to search:</td>
<td><input type="numbre" class="form-control" name="id" placeholder="Enter user you wont to search id ">
</td></tr>
    <tr>
<td bgcolor ="yellow">
<input type="submit" class="btn btn-primary" name="submit2" value="search" onclick="validate()">
</td></tr>
   <tr>
<td bgcolor ="yellow">
<input type="submit" class="btn btn-danger" name="submit4" value="delete" onclick="validate()">
</td></tr>
<tr><td bgcolor ="blue">
<input type="submit" class="btn btn-success" name="submit3" value="view">
</td></tr>
  
</table>
<br><br><br><br>
<marquee><font color ="green">ONLY CLICK VIEW BUTTON </font> 
<font color="blue"> IF YOU WONT TO </font> 
<font color="red">DISPLAY ALL</font></marquee>
</div>
</body>
</html>

<?php

if(isset($_POST["submit2"]))
{
$result=mysqli_query($link,"select * from abcd where id ='$_POST[id]' "); 
if(mysqli_num_rows($result) >0 ) { 
?>
<div class="row col-md-5 col-md-offset-2"> 
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%" >
</div>
	<?php
echo "<tr>";
echo "<th>"; echo "name";    echo "</th>";       
echo "<th>"; echo "id";      echo "</th>";
echo "<th>"; echo "city";    echo "</th>";
echo "<th>"; echo "phone";   echo "</th>";
echo "<th>"; echo "age";     echo "</th>";
echo "<th>"; echo "sex";     echo "</th>";
echo "<th>"; echo "photo";   echo "</th>";
echo "<th>"; echo "Email";   echo "</th>";
echo "<th>"; echo "date";    echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>"; echo $row["name"]; echo "</td>";   
echo "<td>"; echo $row["id"]; echo "</td>";   
echo "<td>"; echo $row["city"]; echo "</td>";   
echo "<td>"; echo $row["phone"]; echo "</td>";
echo "<td>"; echo $row["age"]; echo "</td>";
echo "<td>"; echo $row["sex"]; echo "</td>"; 
?> 
<td> <img src="<?php echo $row["photo"] ?>" width="100px"></td><?php 
//echo "<td>"; echo $row["photo"];   echo "</td>";
echo "<td>"; echo $row["Email"];   echo "</td>";
echo "</tr>";
}

echo "</table>";
}
else{
?>
	<div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> data is not found here!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
}




if(isset($_POST["submit3"]))
{
$result=mysqli_query($link,"select * from abcd ");
if(mysqli_num_rows($result) >0 ){
?>
<div class="row col-md-5 col-md-offset-2"> 
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%" >
</div>
	<?php
echo "<tr>";
echo "<th>"; echo "name";    echo "</th>";       
echo "<th>"; echo "id";      echo "</th>";
echo "<th>"; echo "city";    echo "</th>";
echo "<th>"; echo "phone";   echo "</th>";
echo "<th>"; echo "age";     echo "</th>";
echo "<th>"; echo "sex";     echo "</th>";
echo "<th>"; echo "photo";   echo "</th>";
echo "<th>"; echo "Email";   echo "</th>";
echo "<th>"; echo "date";    echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>"; echo $row["name"];  echo "</td>";   
echo "<td>"; echo $row["id"];    echo "</td>";   
echo "<td>"; echo $row["city"];  echo "</td>";   
echo "<td>"; echo $row["phone"]; echo "</td>";   
echo "<td>"; echo $row["age"];   echo "</td>";
echo "<td>"; echo $row["sex"];   echo "</td>"; 
?> 
<td> <img src="<?php echo $row["photo"] ?>" width="100px"></td><?php    
//echo "<td>"; echo $row["photo"]; echo "</td>";   
echo "<td>"; echo $row["Email"]; echo "</td>";   
echo "<td>"; echo $row["date"];  echo "</td>";   
 
echo "</tr>";
}
echo "</table>";
}
else{
?>
	<div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> data is not found here!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
}
//delete
if(isset($_POST["submit4"]))
{            
$result=mysqli_query($link,"delete from abcd where id ='$_POST[id]'");
//if(mysqli_num_rows($result) >0 ){

?>
	<div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> data is deleted successfully!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
/*else{
?>
	<div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> data is not found here!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
}*/

