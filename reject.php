<?php
include("connection.php");
if(isset($_GET['id']))
{
$dltid=$_GET['id'];
mysqli_query($link,"delete from loan where id = $dltid ");
echo" usre is rejected from loan request table";
}
?>