
<!DOCTYPE html>
<html>
<head>
  <title>view Approval request</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">
          </script>
   <script type="text/javascript">
  function validate()
  {  
    if(form.id.value=="")
    {
alert("plase enter your id you  to view the response of request");
form.id.focus();
return false;
}
}
</script>
</head>
<body >
  <br><br>
<a href="clinic.php" align="center">back to menu</a>
<center>
<form name ="form"action="viewapproved.php " method="post">
  <div class="row col-md-6 col-md-offset-2">
<header class="bg-primary text-white text-center text-italic text-time News Romane">
    <h2>View Approved request form</h2>
    </header>
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%" style="background-color: #ecfbfd;"> 
<tr><td>Enter your id to View Approved request:</td>
<td><input type="numbre" class="form-control" name="id" placeholder="Enter your id to view response of requesting ">
</td></tr>
    <tr>
<td bgcolor ="yellow">
<input type="submit" class="btn btn-primary" name="submit" value="search" onclick="validate()">
</td></tr>
  </table>


<?php
include('connection.php');  
if(isset($_POST["submit"]))
{
$result=mysqli_query($link,"select * from abc where id ='$_POST[id]' "); 
if(mysqli_num_rows($result) >0 ) { 
?>
<div class="row col-md-12 col-md-offset-2"> 
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%" style="background-color:#dafdc3">
</div>
	<?php
echo "<tr>";
//echo "<th>"; echo "name";    echo "</th>";       
echo "<th>"; echo "id";      echo "</th>";
echo "<th>"; echo "fname";    echo "</th>";
echo "<th>"; echo "Email";   echo "</th>";
echo "<th>"; echo "CrAmount";     echo "</th>";
echo "<th>"; echo "age";     echo "</th>";
echo "<th>"; echo "Status";   echo "</th>";
echo "<th>"; echo "PayAmount";   echo "</th>";
echo "<th>"; echo "balance";    echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>"; echo $row["id"]; echo "</td>";   
echo "<td>"; echo $row["fname"]; echo "</td>";   
echo "<td>"; echo $row["Email"]; echo "</td>";   
echo "<td>"; echo $row["CrAmount"]; echo "</td>";
echo "<td>"; echo $row["age"]; echo "</td>";
echo "<td>"; echo $row["status"]; echo "</td>"; 
echo "<td>"; echo $row["PayAmount"];   echo "</td>";
echo "<td>"; echo $row["balance"];   echo "</td>";
echo "</tr>";
}

echo "</table>";
}
else{
?>
	<div class="row col-md-8 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> look !! your sending request does not approved or invalid id entered </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
}