<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">
   </script>
</head>
<body>
  <div class="container"> 
  <div class="row col-md-8 col-md-offset-2">
<form name="form1" action="Transaction.php " method="post">
    <header class="bg-primary text-white text-center text-italic text-time News Romane">
    <h2>customer payment form</h2>
    </header>
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%"> 
 
<tr><td>Enter your id:</td>
<td><input type="text" class="form-control" name="id" placeholder="enter your id" ></td></tr>
  <tr><td>Enter your Payement Amont:</td>
<td><input type="number" class="form-control" name="PayAmount" placeholder="enter your Payement Amount" ></td></tr>

</table>
<br>
<input type="submit" name="Payement" class="btn btn-primary" value="Payement">

<input type="submit" name="reset" class="btn btn-danger" value="reset">&nbsp;
<input type="submit" name="display" class="btn btn-primary" value="display">
</form>
<h3><a href="logout.php">Logout</a></h3>
</body>
</div>   
</div>
</html>
<?php 
include('connection.php');               /*insert*/
if(isset($_POST["Payement"]))
{
$result=mysqli_query($link,"select CrAmount,PayAmount from abc where id='$_POST[id]' ");

$query= mysqli_query($link,"select * from abc where id='$_POST[id]' ");
 
$row=mysqli_fetch_array($query);  
$balance= $row["CrAmount"]-$row["PayAmount"];
$id=$row["id"];
echo $id;

if($id ==$_POST['id']) {

if($balance >0 )
{ 
//$balance=sum('$_POST[CrAmount]'-sum('$_POST[depAmount]'));
mysqli_query($link,"update abc set PayAmount='$_POST[PayAmount]'+ PayAmount  where id='$_POST[id]' ");  
mysqli_query($link,"update abc set balance = CrAmount-PayAmount where id='$_POST[id]' ");
//echo" don't Payement excut";
?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Successfully Transfered!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
} 

else{
?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>yur debt is already covered!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}

}
else{
 ?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>yur id dosenot match plase try again!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
   
}

}
if(isset($_POST["display"]))
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
echo "<th>"; echo "CrAmount";    echo "</th>";
echo "<th>"; echo "PayAmount";    echo "</th>";
echo "<th>"; echo "balance";    echo "</th>";
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
echo "<td>"; echo $row["CrAmount"];  echo "</td>"; 
echo "<td>"; echo $row["PayAmount"]; echo "</td>";   
echo "<td>"; echo $row["balance"];  echo "</td>"; 
//echo "<td>"; echo $row["Email"]; echo "</td>";   
//echo "<td>"; echo $row["date"];  echo "</td>";   
 
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

?>