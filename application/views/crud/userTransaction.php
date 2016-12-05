<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi</title>
	<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css">
</head>
<body>

<?php 
	include 'navbar.php';
?>

<div class="container">  
<h2 style="text-align:left">Data Transaksi</h2><hr>
 <div class ="row">
  <div class="col-lg-12" style="padding-left: 0px;padding-right: 0px;">
	<table class="table table-striped table-hover" style="">
		<thead style="background-color:#6da4e8">
		<tr>
			<th>No</th>
			<th>Id Transaksi</th>
			<th>Total</th>
			<th>Id User</th>
			<th>Status Pembayaran</th>
			<th>Status Pengiriman</th>
			<th>Alamat</th>
			<th>Aksi </th>
		</tr>
		</thead>
		<?php 
			$no=1;
			foreach ($transaction as $u) {
		?>
		<tr>
			<td><?php echo $no ?></td> 
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->total ?></td>
			<td><?php echo $u->user_id ?></td>
			<td><?php echo $u->status_pembayaran ?></td>
			<td><?php echo $u->status_pengiriman ?></td>
			<td><?php echo $u->alamat_pengiriman ?></td>
			<td>
				<?php echo anchor('crud/transaction_Shipped/'.$u->id,'<button class="btn btn-sm btn-success" value="Shipped" style="margin-bottom:5px">Terkirim</button>');?>
				<?php echo anchor('crud/transaction_Payment/'.$u->id,'<button class="btn btn-sm btn-success" value="Payment Received" style="margin-bottom:5px">Terkonfirmasi</button>');?>
			</td>
		</tr>
		<?php } ?>		
	</table>
	</div> 
 </div>
</div>
</body>
</html>