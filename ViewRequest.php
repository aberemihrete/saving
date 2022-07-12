<?php
session_start();
include("connection.php");
$result=mysqli_query($link,"select * from log ");
$row=mysqli_fetch_array($result);
$UserType=$row['UserType'];
$userId=$row['userId'];
$UserName=$row['userId'];
//echo $UserType;
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
<form name="form1" action="ViewRequest.php" method="POST">
    <header class="bg-primary text-white text-center text-italic text-time News Romane">
    <h2 style="height: 50px;">Send Loan request form</h2>
    </header>
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%"> 

<tr>

 <td><input type="submit" name="submit3" class="btn btn-success" value="ShowRequest"></td>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <td><input type="submit" name="submit4" class="btn btn-primary" value="ShowAccepted"></td>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><h3><a href="logout.php" >Logout</a></h3></td></tr>
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
include('connection.php');               //show
if(isset($_POST["submit3"]))
{
$result=mysqli_query($link,"select * from loan ");
if(mysqli_num_rows($result) >0 ){
?>
<table class="tabledesign">
<div class="row col-md-5 col-md-offset-2" style="margin:2px;margin-left: 25%;"> 
<table class="table table-striped table-bordered table-hover table-codensed table-width 50%"style="background: floralwhite;" >
</div>
    <?php
echo "<tr>";
echo "<th >"; echo "id";    echo "</th>"; 
echo "<th >"; echo "Firs name";    echo "</th>";       
echo "<th>"; echo "Last name";      echo "</th>";
echo "<th>"; echo "Account number";    echo "</th>";
echo "<th>"; echo "Address";    echo "</th>";
echo "<th>"; echo "phone";   echo "</th>";
echo "<th>"; echo "age";     echo "</th>";
echo "<th>"; echo "Request date";     echo "</th>";
echo "<th>"; echo "Occupation";     echo "</th>";
echo "<th>"; echo "sex";     echo "</th>";
echo "<th>"; echo "photo";   echo "</th>";
echo "<th>"; echo "Credit amount";   echo "</th>";
echo "<th>"; echo "Loan role";   echo "</th>";
echo "<th>"; echo "Loan period";   echo "</th>";
echo "<th>"; echo "Email";   echo "</th>";
echo "<th>"; echo "Status";    echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>"; echo $row["id"];  echo "</td>";
echo "<td>"; echo $row["fname"];  echo "</td>";
echo "<td>"; echo $row["lname"];  echo "</td>"; 
echo "<td>"; echo $row["accountnumber"];  echo "</td>"; 
echo "<td>"; echo $row["Address"];  echo "</td>";
echo "<td>"; echo $row["phone"];  echo "</td>"; 
echo "<td>"; echo $row["age"];    echo "</td>"; 
echo "<td>"; echo $row["request_date"];  echo "</td>"; 
echo "<td>"; echo $row["occupation"];  echo "</td>"; 
echo "<td>"; echo $row["sex"];  echo "</td>";
?> 
<td> <img src="<?php echo $row["photo"] ?>" width="100px"></td><?php    
//echo "<td>"; echo $row["photo"]; echo "</td>"; 
echo "<td>"; echo $row["CrAmount"];  echo "</td>";   
echo "<td>"; echo $row["loanrole"]; echo "</td>";   
echo "<td>"; echo $row["loanperiod"];   echo "</td>";   
echo "<td>"; echo $row["Email"]; echo "</td>";  
?> 
<td><button class='btn btn-sm btn-primary' name="submit"><a href="accept.php ?
 id=<?php echo $row["id"]; ?> 
 " class="text-light">Accept</a></button>    
    <br><br>
<td><button class='btn btn-sm btn-danger' name="delete"><a href="reject.php ? id=<?php echo $row["id"];?> " class="text-light">Reject</a></button>
<?php   
 
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
 
if(isset($_POST["submit4"]))
{
$result=mysqli_query($link,"select * from abc "); 
if(mysqli_num_rows($result) >0 ) { 
?>
<div class="row col-md-8 col-md-offset-2" style="margin:2px;margin-left: 15%;"> 
<table class="table table-striped table-bordered table-hover table-codensed table-width=50%" style="background-color:#dafdc3;">
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
?>