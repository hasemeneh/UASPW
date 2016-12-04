<!DOCTYPE html>
<html lang="en" style="height:94%">
<head>
	<title>D'Shoes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/w3.css">
</head>
<body style="height:94%">

<?php 
	if(isset($user_data)){
		include 'sidebar.php';
	}
?>


<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom:20px" >
	<div class="container-fluid">
		<div class="navbar-header active">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home"><span class="glyphicon glyphicon-home"></span></a>
		</div>
    
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url()."index.php/product"; ?>">Products</a></li>
				<li><a href="<?php echo base_url()."index.php/aboutus"; ?>">About us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php 
					if(isset($user_data)){
						?>
						<li><p class="navbar-text"><span class="glyphicon glyphicon-user"></span> <?php echo "Hello, ".$user_data['username'];?></p></li>
						<li><a href='<?php echo base_url()."index.php/Login/do_logout"; ?>'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						<?php
					}else{
						?>
						<li><a href="<?php echo base_url()."index.php/Login"; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<?php
					}
				?>

				<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			</ul>
		</div>
	</div>
</nav>


	<div class="w3-display-container w3-content " style="margin-top:68px;margin-bottom:20px">
		<h3><font face="Warnock">Our Promo !<font></h3>
		<hr>
		<img class="mySlides" style="width:1001px;height:351px;" src="<?php echo base_url();?>/assets/gambar/promo/ongkir.png" >
		<img class="mySlides" style="width:1001px;height:351px;" src="<?php echo base_url();?>/assets/gambar/promo/newyear.png" >
		<img class="mySlides" style="width:1001px;height:351px;" src="<?php echo base_url();?>/assets/gambar/promo/newyear.jpg">
		<div class="w3-center w3-section w3-large w3-text-white w3-display-middle" style="width:100%">
			<div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
			<div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
		</div>
		<div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
			<span class="w3-badge demo w3-border w3-transparent w3-hover-grey" onclick="currentDiv(1)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-grey" onclick="currentDiv(2)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-grey" onclick="currentDiv(3)"></span>
		</div>
	</div>
	
	<div class="container">
		<center><a href="<?php echo base_url()."index.php/product"; ?>" class="myFooter" style="text-decoration:none">
			Let's Check Our Shoes!
		</a></center>
	</div>
	
<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			 x[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
			 dots[i].className = dots[i].className.replace(" w3-grey", "");
		  }
		  x[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " w3-grey";
		}
</script>

<footer class="container-fluid text-center">
	© D'Shoes 2016
</footer>

</body>
</html>

