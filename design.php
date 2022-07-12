<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>layout design</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">

      </script>
</head>
<body>
	<form name="form1" method="POST" action="design.php"onLoad="setToday()"background="image1/ima.jpg"> 
		<nav> 
<div id="container">
	
	<?php 
	include("inner/header.php");
	?>

	<div class ="menu-bar">
		<ul>
		<input type="checkbox" id="check">
	<label for="check" class="checkbtn">
	<i class="fas fa-bars"></i>
	</label>
<li class="active" target="_self"><a href="#"><i class="fa fa-home"></i>Home</a></li>
<li><a href="register.php" target="_self">REGISTER</a></li>
<li ><a href="#"  target="_self">UPDATE</a></li>
<li ><a href="show.php" target="_self" >DISPLAY</a></li>
<li ><a href="#" target="_self">DELETE</a></li>
<li><a href="#" target="_self">Loan</a>
<div class="sub-menu-1">
<ul>
<li><a href="#" target="_self">Sendloanrequest</a></li>
<li><a href="#" target="_self">AproveLoan</a></li>
</ul>
</div>
</li>
<li><a href="#" target="_self">Transaction</a>

<div class="sub-menu-1">
<ul>
<li><a href="#" target="_self">Deposit</a></li>
<li><a href="#" target="_self">Withdraw</a></li>
<li><a href="#" target="_self">Payment</a></li>
</ul>
</div>
</li>
<li><a href="#" target="_self">MESSAGE</a>
<div class="sub-menu-1">
<ul>
<li><a href="#" target="_self">Send Message</a></li>
<li><a href="#" target="_self">View Message</a></li>
<li><a href="#" target="_self">respose</a></li>
</ul>
</div>

</ul>
	</div>
	<div id="main">
		<div id="sidebar1">
				<img src="Abqute.jpg" border="1px" >
				<br>
			<img src="cash.jpg" border="1px">
       
		
		</div>

		<div id="sidebar2">
			<img src="Abqt.jpg" border="1px" align="center" >
		</div>
		<div id="columon1">
			main containts hear

		</div>
	</div>

	<footer>
	This is the footer	
	</footer>
	
</div>
</nav>
<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="logout.php">Logout</a></h3>
</form>
</body>
</html>