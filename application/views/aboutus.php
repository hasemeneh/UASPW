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
	$currentPage = 'about';
	if(isset($user_data)){
		include 'sidebar.php';
	}
	include 'navbar.php';
?>

<div class="myAbout">
  <div class="row">
    <div class="col-sm-offset-1 col-sm-10">
		<div class="row">
			<div class="col-sm-4">
				<p>
					<center>We are an internet company that allows individuals and business owners in Indonesia to open and manage their own online stores easily and for free. Tokopedia provides a better online selling experience to the sellers, so that the sellers can provide a better online shopping experience to their customers.</center>
	
		<br>
		<strong><h3>"Marketplace Is the Most Beautiful Business Model in the World.</h3></strong>

		At Tokopedia, we believe that marketplace is the most beautiful business model in the world, because the success of a marketplace can only be achieved by helping others to become more successful. 

		Our services have allowed hundreds of thousands of Indonesian small and medium-sized enterprises (SMEs) to send millions of products every month to their customers throughout Indonesia. Tokopedia is also indirectly responsible for the creation of thousands of new jobs through the growing success of our merchants, who often become a positive impact by providing job vacancies in their immediate communities.
		<br>
		
		
		<strong><h3>Indonesian Internet Company with a Global Vision</h3></strong>

		Tokopedia is the first internet company in Southeast Asia that succeeded to close US$100 million in funding from Softbank and Sequoia Capital. Softbank is the investor behind the success of Alibaba, while Sequoia Capital is the investor behind the success of Apple, Google, Instagram, WhatsApp and many other successful technology companies.
	
		We believe that we are in the process of building a World Class Technology Company which fortunately happens to be in Indonesia.
				</p>
			</div>
		</div><br>
    </div>
</div>
</div><br>


<footer class="container-fluid text-center">
	© D'Shoes 2016
</footer>

</body>
</html>

