<!DOCTYPE html>
<html>
<head>
	<title>D'Shoes</title>
	<script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css">
</head>
<body>

<?php 
	include 'sidebar.php';
	include 'navbar.php';
?>

<div class="container">  
<h2 style="text-align:left">Data Produk</h2><hr>
		
<div class="col-sm-2" style="margin-left:-15px;margin-right:5px;float:left">
	<?php echo anchor('crud/create','<button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Produk</button>');?>
</div>

<div class="col-sm-2" style="margin-left:-15px;">
	<?php echo anchor('crud/transaction','<button class="btn btn-success"></i> Konfirmasi Pemesanan</button>');?>
<br><br></div>

 <div class ="row">
  <div class="col-lg-12" style="padding-left: 0px;padding-right: 0px;">
	<table class="table table-striped table-hover" style="">
		<thead style="background-color:#6da4e8">
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Nama Produk</th>
			<th>Ukuran</th>
			<th>Harga</th>
			<th>Material</th>
			<th>Deskripsi Produk</th>
			<th>Aksi </th>
		</tr>
		</thead>
		<?php 
			$no=1;
			foreach ($t_product as $u) {
		?>
		<tr>
			<td><?php echo $no ?></td> 
			<td><?php echo $u->image ?></td>
			<td><?php echo $u->name ?></td>
			<td><?php echo $u->size_availability ?></td>
			<td><?php echo $u->price ?></td>
			<td><?php echo $u->material ?></td>
			<td><?php echo $u->description ?></td>
			<td>
				<?php echo anchor('crud/edit/'.$u->id,'<button class="btn btn-sm btn-primary" style="margin-bottom:5px">Edit</button>');?>
				<button type=button class='btn btn-sm btn-danger' data-toggle='collapse' data-target='#collapse<?php echo $no;?>'>Delete</button>
			</td>
		</tr>
		<tr >
			<td colspan=8 style="padding:0px">
			<div id="collapse<?php echo $no;?>" style="background-color:#f2dede" class="panel-collapse collapse">
				<div class="panel-body ">Are you sure want to delete the data?
					<?php echo anchor('crud/hapus/'.$u->id,'<button class="btn btn-sm btn-danger">Yes</button>');?>
					<button type=button class='btn btn-default' data-toggle='collapse' data-target='#collapse<?php echo $no++;?>'>No</button>
				</div>
			</div>
			</td>
		</tr>
		<?php } ?>		
	</table>
	</div> 
 </div>
</div>
</body>
</html>