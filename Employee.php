
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>layout design</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js">

      </script>
</head>
<body>
	<form name="form1" method="POST" action="customer.php"> 
<div id="container">
	<?php 
	include("inner/header.php");
	?>
	<div class ="menu-bar">
		<ul>

<li ><a href="register.php" target="_self" >CustomerRegister</a></li>
<li><a href="viewapproved.php" target="_self">ViewApproval</a>
	<li><a href="#" target="_self">Giveloan</a>
<li><a href="#" target="_self">Transaction</a>
<div class="sub-menu-1">
<ul>
<li><!--a href="deposit.php" target="_self">Deposit</a></li-->
<li><a href="withdrwal.php" target="_self">Withdraw</a></li>
<li><a href="Transaction.php" target="_self">Payment</a></li>
</ul>
</div>
</li>

<li><a href="#" target="_self">MESSAGE</a>
<div class="sub-menu-1">
<ul>
<li><a href="#" target="_self">ViewMessage</a></li>
<li><a href="#" target="_self">fedback</a></li>
</ul>
</div></li>

</ul>
	</div>

    <?php 
    include("inner/sider.php");
    ?>
		<div id="columon1">
		</div>
<?php 
    include("inner/footer.php");
    ?>
    	</div>
    	<h5 align="center" style="color: blue;"><?php

echo "<b>".date('l\, F jS\, Y ')."</b>";?></h5>
</form>


</body>
</html>