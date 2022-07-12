<?php
//get values pass from login.php
$username=$_POST["user"];
$password=$_POST["pass"];
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
mysql_connect("localhost","rooot","");
mysql_select_db("login");
$result=mysql_query("select * from users where uname = '$username' and password = '$password'");
$row =mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
	echo"success" $row['username'];
}else{
	echo "filed";
}
?>