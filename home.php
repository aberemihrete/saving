

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">

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
	<form name="form1" method="POST" action="home.php"> 
<div class="row col-md-6 col-md-offset-3"> 
<table class="table table-striped table-bordered table-hover table-codensed ">
<p>well com to </p>
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

