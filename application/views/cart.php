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

<?php include 'navbar.php';?>

<div class="container">  
	<h2 style="text-align:left">Keranjang Ku!</h2><hr>
		
	<div class ="row">
		<div class="col-md-12">
			<table class="table table-striped table-hover">
			<thead style="background-color:#6da4e8">
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Harga</th>
					<th></th>
				</tr>
			</thead>
				<?php 
					$no=1;
					$cpatu = array(
					"Sepatu1"=>"Rp250.000", 
					"Sepatu2"=>"Rp250.000", 
					"Sepatu3"=>"Rp250.000", 
					"Sepatu4"=>"Rp250.000", 
					"Sepatu5"=>"Rp250.000", 
					"Sendal6"=>"Rp.10.000", 
					"Baki"=>"Rp50.000", 
					"Kaos Kaki"=>"Rp50.000", 
					"Sepatu Gunung"=>"Rp600.000", 
					"Sendal Gunung"=>"Rp150.000");

					foreach ($cpatu as $u => $u_harga) {
				?>
				<tr>
					<td><?php echo $no ?></td> 
					<td><?php echo $u?></td>
					<td><?php echo $u_harga ?></td>
					<td>
						<input style="width:45px" type="number" name="quantity" min="1" value="1">
						<button type=button class='btn btn-sm btn-danger' data-toggle='collapse' data-target='#collapse<?php echo $no;?>'>Delete</button>
					</td>
				</tr>
				<tr >
					<td colspan=5 style="padding:0px">
					<div id="collapse<?php echo $no;?>" style="background-color:#f2dede" class="panel-collapse collapse">
						<div class="panel-body ">Are you sure want to delete the data?
							<button type=button class='btn btn-danger'>Yes</button>
							<button type=button class='btn btn-default' data-toggle='collapse' data-target='#collapse<?php echo $no++;?>'>No</button>
						</div>
					</div>
					</td>
				</tr>
				<?php }?>
				<tr>
					<td>Total</td> 
					<td></td>
					<td>Rp12345678</td>
					<td><a href="transaksi.php" type=button class='col-sm-12 btn btn-success'>Buy</a></td>
				</tr>
			</table>
		</div> 
	</div>
</div>
<br>


<footer class="container-fluid text-center">
	© D'Shoes 2016
</footer>

</body>
</html>


