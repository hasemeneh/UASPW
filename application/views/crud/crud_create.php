<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Data</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.css">
</head>
<body>
  
<?php 
	include 'sidebar.php';
	include 'navbar.php';
?>
  
  <h3 class="col-sm-offset-5">Tambah Produk</h3><br>
  
  <form class="form-horizontal" action="<?php echo base_url().'index.php/crud/create_product'; ?>" method="post">
    
	<div class="form-group">
      <label class="control-label col-sm-offset-3 col-sm-1">*Gambar:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="image" required>
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-offset-3 col-sm-1">*Nama Produk:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="name" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-offset-3 col-sm-1">*Ukuran:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="size_availability" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-offset-3 col-sm-1">*Harga:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="price" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-offset-3 col-sm-1">*Material:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="material" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-offset-3 col-sm-1">*Deskripsi Produk:</label>
      <div class="col-sm-4">
        <textarea type="text" class="form-control" name="description" required></textarea>
      </div>
    </div>
	<span class="help-block"></span>
   			
	<div class="form-group">
      <div class="col-sm-offset-4 col-sm-3" >
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
		<a type="button" class="btn btn-default" href="<?php echo base_url().'index.php/crud';?>">Cancel</a>
      </div>
    </div>
  </form>
</body>
</html>
