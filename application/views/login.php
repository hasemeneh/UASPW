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
<?php
	if (isset($user_data)) {
		header("location: http://localhost/uaspw/index.php/crud/");
	}
	
	$currentPage = 'login';
	if(isset($user_data)){
		include 'sidebar.php';
	}
	include 'navbar.php';
?>

<div class="container">
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-success">
			<div class="panel-heading"><h4>Sign In</h4></div>
			
			<div class="panel-body">	
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Login/do_login';?>">
					
					<?php
					if (isset($gagal)) {
						echo "<p style='margin-left:134px'>";
						echo $gagal;
						echo "</p>";
					}
					?>
					<?php
					if (isset($message)) {
						echo "<p style='margin-left:134px'>";
						echo $message;
						echo $pwd;
						echo "</p>";
					}
					?>
			
					<div class="form-group">
						<label class="control-label col-sm-offset-1 col-sm-2">Username:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="username" required>
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-offset-1 col-sm-2">Password:</label>
						<div class="col-sm-8"> 
							<input type="password" class="form-control" name="password" required>
						</div>
					</div>

					<div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-10">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>	
						<span class="col-sm-offset-3 col-sm-10"><br>Belum punya akun?, Daftar <a href="<?php echo base_url().'index.php/Login/sign_up';?>"> disini!</a></span>
						<span class="col-sm-offset-3 col-sm-10"><br>Lupa Password?, Klik <a href="<?php echo base_url().'index.php/Login/recover';?>"> disini!</a></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<br>
<footer class="container-fluid text-center">
	© D'Shoes 2016
</footer>

</body>
</html>


