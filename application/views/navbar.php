		
<div class="jumbotron">
	<div class="container text-center">
		<img src='<?php echo base_url();?>assets/gambar/design/dshoes3.png' class="sepatu" style="width:80px;height:80px;">
		<h1>D'Shoes</h1>
		<p>Just Buy It!</p>
	</div>
</div>
		
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="323" >
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand <?php if($currentPage =='product'){echo 'active';}?>" href="<?php echo base_url()."index.php/home"; ?>"><span class="glyphicon glyphicon-home"></span></a>
		</div>
    
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="<?php if($currentPage =='product'){echo 'active';}?>"><a href="<?php echo base_url()."index.php/product"; ?>">Products</a></li>
				<li class="<?php if($currentPage =='about'){echo 'active';}?>"><a href="<?php echo base_url()."index.php/aboutus"; ?>">About us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php 
					if(isset($user_data)){
						?>
						<li><a href="<?php echo base_url()."index.php/Profile";?>" ><span class="glyphicon glyphicon-user"></span> <?php echo "Hello, ".$user_data['username'];?></a></li>
						<li><a href='<?php echo base_url()."index.php/login/do_logout"; ?>'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						<?php
					}else{
						?>
						<li class="<?php if($currentPage =='login'){echo 'active';}?>"><a href="<?php echo base_url()."index.php/login"; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<?php
					}
				?>

				<li class="<?php if($currentPage =='cart'){echo 'active';}?>"><a href="<?php echo base_url()."index.php/product/cart"; ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			</ul>
			<form class="navbar-form navbar-left" action="<?php echo base_url()."index.php/product"; ?>" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" name="q" placeholder="Search">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</nav>

