<?php
$host="localhost";
$uname="root";
$password="";
$db="login";

$password=$_POST['password'];

$con=mysqli_connect($host,$uname,$password);
mysqli_select_db("login");
if(isset(['uname'])){
	$uname=$_POST['uname'];
	$password=$_POST(['password'];
	$sql="select * from user where uname = '".$username."' and password = '"$password"');
$result=mysqli_query($sql,
if(mysqli_num_rows($result)==1){;

	echo"success" ;
}else{
	echo "filed";
}
?>