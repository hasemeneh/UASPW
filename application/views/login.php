<!DOCTYPE html>
<html lang="en">
<head>
  <title>D'Shoes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
        <li class="active"><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
   <div class="col-sm-offset-3 col-sm-6">
      <div class="panel panel-success">
        <div class="panel-heading"><h4>Sign in</h4></div>
        <div class="panel-body">	
			<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/LoginController/do_login';?>">
				<div class="form-group">
					<label class="control-label col-sm-offset-1 col-sm-2">Username:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="username">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-offset-1 col-sm-2">Password:</label>
					<div class="col-sm-8"> 
						<input type="password" class="form-control" name="password">
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-3 col-sm-10">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
					
					<span class="col-sm-offset-3 col-sm-10"><br>Belum punya akun?, Daftar <a href="signup.php"> disini!</a></span>
				</div>
			</form>
</div>
      </div>
   </div>
 </div>
<br>


<footer class="container-fluid text-center">
 teks teks teks
 </footer>

</body>
</html>


