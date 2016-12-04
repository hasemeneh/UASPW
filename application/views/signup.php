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
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-success">
			
			<div class="panel-body" style="background-color:#f4f9b3;border-radius: 25px;">	
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Login/daftar';?>">
					<h3 style="text-align:center">Sign Up</h3>
					<hr>
					
					<div class="form-group">
						<label class="control-label col-sm-3">Fullname:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="display_name"  placeholder="Masukan nama" required>
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-3">Username:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="username"  placeholder="Masukan username" required>
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-3">Email:</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="email"  placeholder="Masukan email@email.com" required>
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-3">Password:</label>
						<div class="col-sm-8"> 
							<input type="password" class="form-control" name="password"  placeholder="Masukan Password" required>
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-3">Security Question:</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control" name="sec_que" placeholder="Masukan pertanyaan yg bisa kamu ingat" required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-3">Security Asnwer:</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control" name="sec_ans"  placeholder="Masukan jawaban dari pertanyaan kamu" required>
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

</body>
</html>


