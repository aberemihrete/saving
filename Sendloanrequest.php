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
 //header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> send loan request</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">

      </script>
  <script type="text/javascript">
   /* function validate()
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


        /*if(x.length<3)
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
return true; 
 
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
    }*/
</script>
</head>
<body> 
  <div class="container" style="margin-top: 15px;border-radius: 6px; "> 
  <div class="row col-md-12 col-md-offset-0">
<form name="form1" action="Sendloanrequest.php" method="POST">
    <header class="bg-primary text-white text-center text-italic text-time News Romane">
    <h2 style="height: 50px;">Send Loan request form</h2>
    </header>
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%"> 
<tr><td> <font size="4">Enter your First name:</font></td>
<td><input type="text"class="form-control" name="fname" placeholder="Enter your first name"></td></tr>
<tr><td> <font size="4">Enter your last name:</font></td>
<td><input type="text"class="form-control" name="lname" placeholder="Enter your last name"></td></tr>
<tr><td><font size="4">Enter your Account number:</font></td>
<td><input type="numbre" class="form-control" name="accountnumber" placeholder="Enter account number"></td></tr>
<tr><td><font size="4">Enter your Address:</font></td>


<td><input type="text" class="form-control" name="Address" placeholder="enter your Address"></td></tr>
<tr><td><font size="4">Enter your phone:</font></td>
<td><input type="number" class="form-control" name="phone" placeholder="enter your phone number"></td></tr>
<tr><td><font size="4">Enter your age:</font></td>
<td><input type="number" class="form-control"name="age" placeholder="enter your age"></td></tr>

<tr><td> <font size="4">request date:</font></td>
<td><input type="date"class="form-control" name="request_date" placeholder="Enter request date"></td></tr>

<tr><td> <font size="4">Enter your Occupation:</font></td>
<td><input type="text"class="form-control" name="occupation" placeholder="Enter your Occupation"></td></tr>
<tr>
<td><font size="4">gender:</font></td>
<td><input type="radio" name="sex" value="M">Male &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
<input type="radio" name="sex" value="F">Female
</td>
</tr>
<tr><td><font  size="4" name="photo"><font color="red"></font>photo:</font></td>
<td><font  size="4"><input class="form-control" name="photo" type="file" id="file" placeholder="enter your photo" ></font></td></tr> 
 
  <tr><td><font size="4">Enter your Credit Amont:</font></td>
<td><input type="number" class="form-control" name="CrAmount" placeholder="enter your Credit Amount" ></td></tr>
<tr><td> <font size="4">Enter Loan Role:</font></td>
<td><input type="text"class="form-control" name="loanrole" placeholder="Enter your loan role"></td></tr>
<tr><td> <font size="4">Enter loan period:</font></td>
<td><input type="date"class="form-control" name="loanperiod" placeholder="Enter the maximum period "></td></tr>
  <tr><td><font size="4">Enter your Email:</font></td>
<td><input type="text" class="form-control" name="Email" placeholder="enter your Email" ></td></tr>
</td></tr>
</table>
<table>
<tr><td> <input type="submit" name="send" class="btn btn-primary" value="send">
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="reset" class="btn btn-danger" value="reset">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><h3><a href="logout.php" >Logout</a></h3></td></td></tr>
</table>
</form>

</div> 
</div>  
</div>

<h5 align="center" style="color: blue;"><?php

echo "<b>".date('l\, F jS\, Y ')."</b>";?></h5>
</body>

</html>
<?php 
include('connection.php');               /*insert*/
if(isset($_POST["send"]))
{
mysqli_query($link,"insert into loan(fname,lname,accountnumber,Address,phone,age,request_date,occupation,sex,photo,CrAmount,loanrole,loanperiod,Email) values(
'$_POST[fname]',
 '$_POST[lname]', 
 '$_POST[accountnumber]',
 '$_POST[Address]',
 '$_POST[phone]',
 '$_POST[age]',
 '$_POST[request_date]',
 '$_POST[occupation]',
 '$_POST[sex]',
 '$_POST[photo]', 
 '$_POST[CrAmount]',
 '$_POST[loanrole]',
 '$_POST[loanperiod]',
 '$_POST[Email]' )" );  
/*switch($st){
    case 0:
    echo"rejected";
    break;
    case 1:
    echo"accepted";
    break;
    case 2:
    echo"<form>
    <input type='submit'class='btn btn-sm btn-primary' value='Accept'/></form> 
    <form>
    <input type='submit'class='btn btn-sm btn-primary' value='Reject'/> </form> ";
  break;

}*/
?>

    <div class="row col-md-9 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your data is inserted successfully!!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
}


?>