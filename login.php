

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">

      </script>
           <script type="text/javascript">
    function validate()
    {
        if(form1.text1.value=="")
    {
           alert("plase enter your password in the passsword field");
     form1.text1.focus();
    return false;
   }
     x=document.form1.text2.value;
        if(x.length<3)
        {   
        alert("plase enter at least 3 characters in name field");
        form1.text2.focus();
        return false;
    }
     if(form1.User.value=="")
    {
     alert("plase select One User Type the fieled is requered"); 
     form1.User.focus();
    return false;
   
       }
   }
 </script>
</head>
 
<body >
<div id="container">
    <?php 
    include("inner/header.php");
    ?>
    <div class ="menu-bar">
    <?php 
    include("inner/menulink.php");
    ?>
    </div>
    <?php 
    include("inner/sider.php");
    ?>
    <div id="columon1">
    <br> <br>
	<center>
	<form name="form1" method="POST" action="login.php"> 
<div class="row col-md-6 col-md-offset-3"> 
<table class="table table-striped table-bordered table-hover table-codensed ">
</div>


 
<tr>
     <td >

  <h1><marquee direction="left"><font color="green" size="50">User</font>
<font color="#fcb923">Login</font> 
<font color="red">page</font>
        </marquee>
         </h1>
         <td><img src="key.jpg" height="140px" align="center" width="150px" border="5" background-color="green" style="border-radius: 15px;"></td>
        </td> </tr>
   


	<tr><td >User Type</td>
		<td><input type="radio" name="User" value="Admin">Admin
		<input type="radio" name="User" value="Manager">Manager
		<input type="radio" name="User" value="Employee">Employee
		<input type="radio" name="User" value="Customers">Customers
        </td></tr>  
</tr>
	<tr><td >User Id</td>

	<td><input type="password" name="text1" class="form-control" placeholder="Enter user Password"></td></tr>
	<tr><td >User Name</td>
	<td><input type="text" name="text2" class="form-control" placeholder="Enter user Name"></td></tr>
<tr><td>
<input type="submit" name="Login" style="width:150px;height: 45px;" class="btn btn-success" value="Login" onclick="validate()">
  </td></tr>
</table>
</div>
</form>
</center>
  </div>
<?php 
    include("inner/footer.php");
    ?>

</body >
</html>

<?php 
include('connection.php');
//session_start();

if(isset($_POST["Login"]))
{
 @$v1=$_POST['text1'];
  @$v2=$_POST['text2'];
  @$v3=$_POST['User'];

  //$sqlvar="select * from log where userId='$v1' and UserName ='$v2' ";
  //$result=$link->query($sqlvar);
  $result=mysqli_query($link,"select * from log where UserType='$v3' and userId='$v1' and UserName ='$v2' ");
if(mysqli_num_rows($result) > 0){

 
switch (@$v3) {
	case 'Admin':
header("location:design.php");
		break;
	case 'Manager':
   
header("location:register.php");
       break;
	case 'Employee':		
header("location:Transaction.php");		
      break;
		case 'Customer':
header("location:manageAccount.php");
		break;	
		default:
echo" plase select only one User Type";
		break;
}
//if($result->num_rows > 0){
	//header("location:register.php");
}
else
{
?>
	<div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> Incorrect user name or password plase try again!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php

}
}
?>