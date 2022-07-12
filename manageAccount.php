<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crate accuont</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">

      </script>
  <script type="text/javascript">
    function validate()
    {
        
     x=document.form1.UserName.value;
        if(x.length<3)
        {   
        alert("plase enter at least 3 characters for username");
        return false;
    }
    
     if(form1.UserType.value=="")
    {
     alert("plase select One User Type the fieled is requered"); 
     form1.UserType.focus();
    return false;
   
       }
        //alert("plase select one username");
   if(form1.userId.value=="")
    {
  alert("plase enter your password in the passsword field");
     form1.userId.focus();
    return false;
   }

    }
    function confirmation(){
    var result = confirm("Are you sure to delete usuer Account ?");
    if(result){
     
    }
}
</script>
</head bgcolor="Lightblue">
<body>
  <div class="container" style="margin: 60px auto;"> 
  <div class="row col-md-9 col-md-offset-3">
<form name="form1" action="manageAccount.php " method="post">
    <header class="bg-info text-white text-center text-italic">
    <h1>Manage User Account form</h1>
    </header>
 

<table class="table table-striped table-bordered table-hover table-codensed  "> 
<tr><td>User Type:</td>
  <td>
<input type="radio" name="UserType" value="Admin">Admin 
<input type="radio" name="UserType" value="Manager">Manager
<input type="radio" name="UserType" value="Employee">Employee 
<input type="radio" name="UserType" value="Customer">Customer
 </td>
</tr>
<tr><td>Enter your Password:</td>
<td><input type="password" class="form-control" name="userId" placeholder="enter your Password"></td></tr>
<tr><td>User Name:</td>
<td><input type="text" class="form-control" name="UserName" placeholder="Enter user Name"></td></tr>

</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="CreateAcc" class="btn btn-success" value="CreateAcc" onclick="validate()">
<input type="submit" name="UpdateAcc" class="btn btn-primary" value="UpdateAcc" onclick="validate()">
<input type="submit" name="DeleteAcc" class="btn btn-danger" value="DeleteAcc" onclick="confirmation()">
<input type="submit" name="display" class="btn btn-secondary" value="display">

</form>
<h3 align="center"><a href="logout.php">Logout</a></h3>
</div>   
</div>

</body>
</html>
<?php 
include('connection.php');               /*insert*/
if(isset($_POST["CreateAcc"]))
{
   $UserType=$_POST['UserType'];
   $userId=md5($_POST['userId']);
	$UserName=$_POST['UserName'];
   //$userId=md5($_POST['userId']);
 mysqli_query($link,"insert into log values('$UserType','$userId','$UserName' )");

?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert" >
  <strong>User Account is Created successfully!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php

}

if(isset($_POST['UpdateAcc']))
{
	@$UserType=$_POST['UserType'];
	@$userId=$_POST['userId'];
	@$UserName=$_POST['UserName'];

$query="Update log set  
    UserType='$UserType',
    userId='$userId',
    UserName='$UserName' where UserName='$UserName' ";
$query_run = mysqli_query($link,$query);
if($query_run)
{
	?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your User Acount  is updated successfully!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
else{
?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>User Account is not updated !!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
	
}
}
if(isset($_POST["display"]))
{
$result=mysqli_query($link,"select * from log ");
if(mysqli_num_rows($result) >0 ){
?>
<div class="row col-md-5 col-md-offset-2" style="margin:2px;margin-left: 25%;"> 
	<center>
<table class="table table-striped table-bordered table-hover table-codensed " >
</div>
	<?php
echo "<tr>";
echo "<th>"; echo "UserType";    echo "</th>";       
echo "<th>"; echo "userId";      echo "</th>";
echo "<th>"; echo "UserName";   echo "</th>";

echo "</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>"; echo $row["UserType"];  echo "</td>";   
echo "<td>"; echo $row["userId"];    echo "</td>";   
echo "<td>"; echo $row["UserName"];  echo "</td>";     
 
echo "</tr>";
}
echo "</table>";

}
else{
?>
	<div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> User Account  is not found here!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
}
if(isset($_POST["DeleteAcc"]))
{            
$result=mysqli_query($link,"delete from log where UserName ='$_POST[UserName]'");
//if(mysqli_num_rows($result) >0 ){

?>
	<div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> User Account  is deleted successfully!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
	


?>
