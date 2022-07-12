
<?php 
include('connection.php');             


if(isset($_GET['id']))
{
$dltid=$_GET['id'];
$query="select * from loan where id= $dltid ";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_assoc($result);   
$fname=$row['fname'];
$Email=$row['Email'];
$CrAmount=$row['CrAmount'];
$age=$row['age'];

mysqli_query($link,"insert into abc(id,fname,Email,CrAmount,age) values('$dltid','$fname','$Email','$CrAmount','$age' ) ");
mysqli_query($link,"update abc set status='Accepted' where id = $dltid ");
mysqli_query($link,"delete from loan where id = $dltid ");
$query_run = mysqli_query($link,$query);
if($query_run)
{
  ?>
  <script type="text/javascript" src="js/bootstrap.min.js"> </script>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
}
else{
?>
    <div class="row col-md-5 col-md-offset-2">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your data is not recorded on yur loan successfully on loan file !!!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<?php
  
}



//id  fname Email CrAmount  age text*/
/*$result=mysqli_query($link,"delete from loan where id =$dltid ");


//if ($result) {
  header("location:login.php");
}
else{
echo"not deleted";
}*/
}
?>