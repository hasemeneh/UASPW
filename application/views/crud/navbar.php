<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url()."index.php/crud"; ?>">D'Shoes</a>
		</div>
    
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><p class="navbar-text"><span class="glyphicon glyphicon-user"></span> 
				<?php echo $this->session->username;?>
				
				(<?php echo $this->session->dp; ?>)</p></li>
			<li><a href="<?php echo base_url().'index.php/login/do_logout';?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>	
		</div>
	</div>
</nav>