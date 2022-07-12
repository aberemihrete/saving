
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update information</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">
       </script>
</head>
<body>
<body>
  <div class="container"> 
  <div class="row col-md-8 col-md-offset-2">
<form name="form1" action="update.php " method="post">
    <header class="bg-primary text-white text-center text-italic text-time News Romane">
    <h2>Customer information update form</h2>
    </header>
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%"> 
<tr><td> <font size="5">Enter your  name:</font></td>
<td><input type="text"class="form-control" name="name" placeholder="Enter your account number"></td></tr>
<tr><td>Enter your id _num:</td>
<td><input type="numbre" class="form-control" name="id" placeholder="Enter yor id "></td></tr>
<tr><td>Enter your city:</td>
<td><input type="text" class="form-control" name="city" placeholder="enter your city"></td></tr>
<tr><td>Enter your phone:</td>
<td><input type="number" class="form-control" name="phone" placeholder="enter your phone number"></td></tr>
<tr><td>Enter your age:</td>
<td><input type="number" class="form-control"name="age" placeholder="enter your age"></td></tr>
<tr>
<td>gender:</td>
<td><input type="radio" name="sex" value="M">Male &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
<input type="radio" name="sex" value="F">Female
</td>
</tr>
<tr><td><font face="verdana,arial" size="4" name="photo"><font color="red"></font>photo:</font></td>
<td><font face="verdana,arial" size="4"><input class="form-control" name="photo" type="file" id="file" placeholder="enter your photo" ></font></td></tr> 
   <tr><td>Enter your Email:</td>
<td><input type="text" class="form-control" name="Email" placeholder="enter your Email" ></td></tr>
</table>
<br>

<input type="submit" name="submit5" class="btn btn-success" value="update">
<input type="submit" name="reset" class="btn btn-danger" value="reset">
</form>
<a href="show.php" align="center">click here to check and click view button</a><br><br>
</body>
</div>   
</div>
</html>
</body>
</html>
<?php
session_start();
include('connection.php'); 
if(isset($_POST['submit5']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$photo=$_POST['photo'];
	$Email=$_POST['Email'];

$query="update abcd set  
    name='$name',
    city='$city',
    phone='$phone',
    age='$age',
    sex='$sex',
    photo='$photo',
    Email='$Email' where id='$id' ";
$query_run = mysqli_query($link,$query);
if($query_run)
{
	?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your data is updated successfully!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}
else{
?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your data is not updated !!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
	
}
}
?>
