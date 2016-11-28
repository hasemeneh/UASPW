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

<div class="jumbotron">
  <div class="container text-center">
    <h1>D'Shoes</h1>
    <p>Mission, Vission & Values</p>
  </div>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="240">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="contact.php">About us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

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
			<td><?php echo $no++ ?></td> 
			<td><?php echo $u?></td>
			<td><?php echo $u_harga ?></td>
			<td>
				<input style="width:45px" type="number" name="quantity" min="1" value="1" readonly>
			</td>
		</tr>
		<?php }?>
		<tr>
			<td colspan="4"><a href="home.php" type=button class='col-sm-2 col-sm-offset-5 btn btn-success'>Kembali</a></td>
			
		</tr>
		</table>
		</div> 
	</div>
</div>

<br>
<footer class="container-fluid text-center">
 teks teks teks
 </footer>

</body>
</html>


