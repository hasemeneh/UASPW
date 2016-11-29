<!DOCTYPE html>
<html lang="en">
<head>
	<title>D'Shoes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css"></head>
<body>

<?php include 'navbar.php';?>

<div class="container">
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-success">
			<div class="panel-heading"><h4>Sign Up</h4></div>
			
			<div class="panel-body">	
				<form class="form-horizontal" method="post" action="">
				
					<div class="form-group">
						<label class="control-label col-sm-offset-1 col-sm-2">Nama:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nama">
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-offset-1 col-sm-2">Email:</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="email">
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-offset-1 col-sm-2">Password:</label>
						<div class="col-sm-8"> 
							<input type="password" class="form-control" name="pwd">
						</div>
					</div>
				
					<div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-10">
							<button type="submit" class="btn btn-green">Submit</button>
						</div>	
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


