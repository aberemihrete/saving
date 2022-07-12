<?php
session_start();
include("connection.php");
$result=mysqli_query($link,"select * from log ");
$row=mysqli_fetch_array($result);
$UserType=$row['UserType'];
$userId=$row['userId'];
$UserName=$row['userId'];
echo $UserType;
if (!isset($_SESSION['$UserType'])) {
 header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">

      </script>
  <script type="text/javascript">
    function validate()
    {
        //var load = window.open ('birk/index.php','_self',false);
        var x=document.form1.name.value;
        if(isNaN(x)||x.length !=10)
        {   
        alert("plase enter 10 number only");
        return false;
    }
     x=document.form1.city.value;

   /*if(document.getElementById("city").value =="")
   {
    alert(' fill your city  !!');
    document.getElementById("city").focus();
    return false;
   }*/


        if(x.length<3)
        {   
        alert("plase enter at least 3 characters");
        return false;
    }
    x=document.form1.phone.value;
        if(isNaN(x)||x.length !=10)
        {   
        alert("plase enter 10 number only");
        return false;
    }

    x=document.form1.age.value;
        if(isNaN(x))
        {   
        alert("plase enter number only");
        return false;
    }
    x=document.form1.sex.value;
    for(i=0;i<x.length;i++){ 
    if(x[0].Checked==false || x[1].checked==false){
    }
    }
        alert("plase select one gender the fieled is requered");

    /*x=document.form1.photo.value;
    var validExt=["jpeg","png","jpg"];
    if(x.value !='')
    {

    var x_ext=x.value.substring(x.value.lastIndexOf(',')+1);
        var result=validExt.includes(x_ext);
        if(result==false)
        {
            alert("selected files is not an image...");
            return false;
        }
        else
        {
            if(parsefloat(x.files[0].size/(1024*1024))>=3)
            {

                alert("file size must be smaller than 3 MB.current filesize :" + parsefloat(x.files[0].size/(1024*1024)) );
                return false;
            }
        }
    }
    else{
        alert("no image is selected...");
        return false;
    }
    return true;
if(form1.Email.value==""){
alert("email empty imposiple");
form1.Email.focus();
return false;
}
var eml=/^([A-Za-z0-9.-]+)@([A-Za-z0-9-]+).([a-z]{2,10})$/;
if(eml.test(form1.Email.value)==false){
    alert("invalid email");
    form1.Email.focus();
    return false;
}
return true; */
 
    }
    function formValidation(){
//assign the fields
       
var city=document.getElementById('city');
if(isAlphabet(city, "please enter Your city in letters only")){

}
return false;
}
function isAlphabet(elem, helperMsg){
    var alphaExp = /^[a-zA-Z]+$/;
    if(elem.value.match(alphaExp)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
 function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
        {
        alert(" You mest be Enter only charecters in this place! ")
            return false;
      }
    }
</script>
</head>
<body onLoad="setToday()" background="image1/ima.jpg"> 
    <?php 
include("inner/header.php");
    ?>
  <div class="container"> 
        <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
    </label>
  <div class="row col-md-8 col-md-offset-2">
<form name="form1" action="register.php " method="post" onsubmit='return validate()'>
    <header class="bg-primary text-white text-center text-italic text-time News Romane">
    <h2>New customer registeration form</h2>
    </header>
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%"> 
<tr><td> <font size="5">Enter your  name:</font></td>
<td><input type="text"class="form-control" name="name" placeholder="Enter your account number"></td></tr>
<tr><td>Enter your id _num:</td>
<td><input type="numbre" class="form-control" name="id" placeholder="Enter yor id "></td></tr>
<tr><td>Enter your city:</td>


<td><input type="text" class="form-control" name="city" placeholder="enter your city" onKeyPress="return ValidateAlpha(event)" required="required"></td></tr>
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
  <tr><td>Enter your Credit Amont:</td>
<td><input type="number" class="form-control" name="CrAmount" placeholder="enter your Credit Amount" ></td></tr>


</table>
<br>
<input type="submit" name="submit1" class="btn btn-primary" value="Register" onclick="validate()">

<input type="submit" name="reset" class="btn btn-danger" value="reset">&nbsp;
</form>
<h3><a href="logout.php">Logout</a></h3>
</div>   
</div>
<?php
echo "<b>".date('l\, F jS\, Y ')."</b>";?>
</body>

</html>
<?php 
include('connection.php');               /*insert*/
if(isset($_POST["submit1"]))
{
//$balance=sum('$_POST[CrAmount]'-sum('$_POST[depAmount]'));
mysqli_query($link,"insert into abcd(name,id,city,phone,age,sex,photo,Email,CrAmount) values(
'$_POST[name]',
 '$_POST[id]', 
 '$_POST[city]',
 '$_POST[phone]',
 '$_POST[age]',
 '$_POST[sex]',
 '$_POST[photo]',
 '$_POST[Email]',
 '$_POST[CrAmount]')");  
?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your data is inserted successfully!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}

?>