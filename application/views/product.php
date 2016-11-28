<!DOCTYPE html>
<html lang="en">
<head>
	<title>D'Shoes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css">
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>D'Shoes</h1>
    <p>Mission, Vission & Values</p>
  </div>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="240">
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
				<li><a href="<?php echo base_url().""; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid">
	<div class="row"> 
		<?php
			foreach ($products as $product) {
				// echo "".;
			

		?>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading"><?php echo "".$product->name; ?></div>
				<div class="panel-body"><img src='<?php echo "".$product->image; ?>' class="img-responsive" style="width:100%" alt="Image"></div>
				<div class="panel-footer">Rp <?php echo "".$product->price; ?>-
					<a href="login.php "type="button" class="btn btn-info btn-sm" style="float:right;height:27px;margin-top:-4px">
					<span class="glyphicon glyphicon-plus-sign"></span>
					<span class="glyphicon glyphicon-shopping-cart "></span>
					Add to Cart
					</a>		
				</div>
			</div>
		</div>
	 	<?php
	 		}
	 	?>
	</div>
</div>
<br>

<footer class="container-fluid text-center">
	© D'Shoes 2016
</footer>


</body>
</html>

