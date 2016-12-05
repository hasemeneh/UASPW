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
	$currentPage = 'cart';
	if(isset($user_data)){
		include 'sidebar.php';
	}
	include 'navbar.php';
?>


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
					$total =0;
					foreach ($cart as $key) {
				?>
				<tr>
					<td><?php echo $no ;?></td> 
					<td><?php echo $key->name;?></td>
					<td><?php echo $key->price;?></td>
					<td>
						<input style="width:45px" readonly type="number" name="quantity" min="1" value="<?php echo $key->quantity;?>">
						<button type=button class='btn btn-sm btn-danger' data-toggle='collapse' data-target='#collapse<?php echo $no;?>'>Delete</button>
					</td>
				</tr>
				<tr >
					<td colspan=5 style="padding:0px">
					<div id="collapse<?php echo $no;?>" style="background-color:#f2dede" class="panel-collapse collapse">
						<div class="panel-body ">Are you sure want to delete the data?
							<form action="<?php echo base_url().'index.php/Product/deletefromcart';?>"  method="POST">
								<input type="hidden" name="id" value="<?php echo $key->id;?>">
								<button style="float:left;margin-right:5px" type="submit" class='btn btn-danger'>Yes</button>
							</form>							
							<button style="float:left" type=button class='btn btn-default' data-toggle='collapse' data-target='#collapse<?php echo $no++;?>'>No</button>
						</div>
					</div>
					</td>
				</tr>
				<?php 
					$total=$total+($key->price*$key->quantity);
				
				}?>
				<tr>
				<?php
					if($no > 1){
						?>
						<td>Total</td> 
						<td></td>
						<td>Rp <?php echo $total;?></td>
						<td>
						<button type=button class='col-sm-12 btn btn-sm btn-success' data-toggle='collapse' data-target='#collapse999'>Buy</button>
						
						</td>
						</tr>
						<tr>
							<td colspan=5 style="padding:0px">
								<div id="collapse999" style="background-color:rgb(183, 239, 179);" class="panel-collapse collapse">
								<div class="panel-body ">Are you sure want to check out the cart?
									<form action="<?php echo base_url().'index.php/Product/verifytransaction';?>"  method="POST">
										<input type="hidden" name="id" value="<?php echo $transaction[0]->id;?>">
										<input type="hidden" name="total" value="<?php echo $total;?>">
											<div class="form-group">
												<textarea class="form-control"  rows="5" cols="12" type="text" name="alamat" placeholder="Masukan Alamat Anda" required></textarea>
											</div>
										<button style="float:left;margin-right:5px" type="submit" class='btn btn-danger'>Yes</button>
									</form>							
									<button style="float:left;" type=button class='btn btn-default' data-toggle='collapse' data-target='#collapse999'>No</button>
								</div>
								</div>
							</td>		
						</tr>
						<?php
					}
				?>
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


