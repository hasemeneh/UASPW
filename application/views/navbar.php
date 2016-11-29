
<div class="jumbotron">
	<div class="container text-center">
		<h1>D'Shoes</h1>
		<p>Mission, Vission & Values</p>
	</div>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="240" >
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