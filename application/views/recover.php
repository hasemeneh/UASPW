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

<?php
	$currentPage="";
	include 'navbar.php';
?>

<div class="container">
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-success">
			
			<div class="panel-body" style="background-color:#ffb7ca;border-radius: 25px;padding-bottom:29px">	
			<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Login/verify';?>">
	
				<h3 style='text-align:center;'>Password Recovery</h3>
				<hr>
				
				<?php
					if (isset($pesan)){
						echo "<p style='margin-left:89px'>";
						echo $pesan;
						echo "</p>";
					}
				?>	
			
				<div class="form-group">
					<div class="col-sm-6 col-sm-offset-2">
						<label class="control-label">Masukan Username Anda:</label>
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<br><input type="text" class="form-control" name="username" required>
					</div>
				</div>
				
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-info">Submit</button>
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


