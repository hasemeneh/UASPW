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
	$currentPage = 'product';
	if(isset($user_data)){
		include 'sidebar.php';
	}
	include 'navbar.php';
?>

<div class="container-fluid">
	<div class="row"> 
		<?php
			foreach ($products as $product) {			
				
		?>
		<div class="col-sm-3">
			<div class="panel panel-primary">
				<div class="panel-heading"><?php echo "".$product->name; ?></div>
				<div class="panel-body">
					<a data-toggle="modal" data-target='#<?php echo $product->id; ?>Modal'>
						<img src='<?php echo "".$product->image; ?>' class="img-responsive" style="width:270px;height:270px;">
					</a>
				</div>
				<div class="panel-footer">Rp <?php echo "".$product->price; ?>-		
				</div>
			</div>
		</div>
		
		<!-- Modal -->
		<div id='<?php echo $product->id; ?>Modal' class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content" style="height:600px;width:600px">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><?php echo "".$product->name; ?></h4>
					</div>
					<div class="modal-body" style="height:80%">
						<table class="table" style="height:100%">
							<tbody>
								<tr>
									<td ><img src='<?php echo "".$product->image; ?>'style="width:350px;height:350px"></td>
									<td >
										<label>Deskripsi</label><br> <?php echo $product->description; ?>
										<br><br>
										<label>Material</label><br><?php echo $product->material; ?>
										<br><br>
										<label>Ukuran</label><br> <?php echo $product->size_availability; ?>
										<br><br>
										<label>Harga</label><br>Rp<?php echo $product->price; ?>-
									</td>							  
								</tr>							 
								<tr>
									<td colspan=2>
									<form class="form-horizontal" method="post" action="<?php echo base_url().'SOK_ISI_SAMA_CONTROLLER';?>">
										<label style="float:left;margin-top:5px;margin-right:5px" >Size:</label>
										<select class="form-control" name="size" style="width:80px;float:left">
											<option>33</option>
											<option>34</option>
											<option>35</option>
											<option>36</option>
											<option>37</option>
											<option>38</option>
											<option>39</option>
											<option>40</option>
											<option>41</option>
											<option>42</option>
											<option>43</option>
											<option>44</option>
											<option>45</option>
										</select>
										<button style="float:right;margin-left:5px" type="submit" class="btn btn-info btn-sm">
										<span class="glyphicon glyphicon-plus-sign"></span>
											<span class="glyphicon glyphicon-shopping-cart "></span>
											Add to Cart
										</button>
										<input style="float:right;width:45px;height:30px" type="number" name="quantity" min="1" value="1">
									</form>
								</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
	
	
	
</div>
<br>

<footer class="container-fluid text-center">
	© D'Shoes 2016
</footer>

</body>
</html>