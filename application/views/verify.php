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
			<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Login/check_answer';?>">
	
				<h3 style='text-align:center;'>Password Recovery</h3>
				<hr>
				<?php
					if (isset($pesan)) {
						echo "<p style='margin-left:89px'>";
						echo $pesan;
						echo "</p>";
					}
				?>	
				
				<div class="form-group">
					
					<div class="col-sm-6 col-sm-offset-2">
						<label class="control-label">Pertanyaan Keamanan Anda:</label>
					</div>
					
					<?php
						echo "<label style='margin-left:104px'><br>";
						echo $pertanyaan;
						echo "</label>"
					?>
					
					<div class="col-sm-6 col-sm-offset-2">
						<label class="control-label">Masukan Jawaban Anda:</label>
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<br><input type="hidden" class="form-control" name="username" value="<?php echo $username ?>" required>
						<input type="text" class="form-control" name="answer" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<label class="control-label">Masukan Password Anda Yang Baru:</label>
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<br><input type="password" class="form-control" name="pwd" required>
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


</body>
</html>


