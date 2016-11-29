<!DOCTYPE html>
<html lang="en">
<head>
	<title>D'Shoes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/w3.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:0px" >
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php">Logo</a>
		</div>
    
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="home.php">Home</a></li>
				<li class="active"><a href="product.php">Products</a></li>
				<li><a href="contact.php">About us</a></li>
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


<div class="w3-display-container " style="width:100%;padding-top: 50px;">
	<img class="mySlides" src="http://www.w3schools.com/w3css/img_nature_wide.jpg" style="width:100%;height:560px">
	<img class="mySlides" src="http://www.w3schools.com/w3css/img_fjords_wide.jpg" style="width:100%;height:560px">
	<img class="mySlides" src="http://www.w3schools.com/w3css/img_mountains_wide.jpg" style="width:100%;height:560px">
	<div class="w3-center w3-section w3-large w3-text-white w3-display-middle" style="width:100%">
		<div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
		<div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
	</div>
	<div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
		<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
		<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
		<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
	</div>
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
			 dots[i].className = dots[i].className.replace(" w3-white", "");
		  }
		  x[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " w3-white";
		}
</script>

<footer class="container-fluid text-center">
	© D'Shoes 2016
</footer>

</body>
</html>

