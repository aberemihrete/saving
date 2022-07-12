<?php
$servername="localhost";
$username="root";
$Password="";
$dbname="database1";
$link=mysqli_connect($servername,$username,'',$dbname);
$con=mysqli_select_db($link,$dbname);
/*if($con){
echo ('connect succssefully');
}
else{
 
die('connection is fieled due to'.mysqli_connect_error());
}*/
?>