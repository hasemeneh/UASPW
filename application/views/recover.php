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


<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-danger">
			<div class="panel-heading"><h4>Recover Password</h4></div>
			
			<div class="panel-body" style="padding-bottom:29px">	
				<?php
					if($cek == NULL){
						echo '
						<form class="form-horizontal" method="post" action="recover">
						<div class="form-group">
						';
						if (isset($error_message)){
							echo "<p style='margin-left:136px'>";
							echo $error_message;
							echo "</p>";
						}
						echo'
							<div class="col-sm-6 col-sm-offset-2">
								<label class="control-label">Masukan username Anda:</label>
							</div>
							<div class="col-sm-offset-2 col-sm-6">
								<br><input type="text" class="form-control" name="username" required>
							</div>
						</div>
						
						<div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-info">Submit</button>
							</div>	
						</div>
						</form>';
					}
					else{
						echo'
						<form class="form-horizontal" method="post" action="cek_recover">
						<div class="form-group">
							<div class="col-sm-6 col-sm-offset-2">
								<label class="control-label">Pertanyaan Keamanan:</label>
							</div>
							
							<div class="col-sm-6 col-sm-offset-2">
								<br><p>'.$pertanyaan.'</p>
							</div>
							
							<div class="col-sm-6 col-sm-offset-2">
								<label class="control-label">Masukan Jawaban Anda:</label>
							</div>
				
							<div class="col-sm-6 col-sm-offset-2">
								<br><input type="hidden" name="sec_answer" value='. $jawaban .'>
								<br><input type="hidden" name="password" value='. $password .'>
								<br><input type="text" class="form-control" name="jawaban" required>
							</div>
						</div>
						
						<div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-info">Submit</button>
							</div>	
						</div>
						</form>';
					}
				?>
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


