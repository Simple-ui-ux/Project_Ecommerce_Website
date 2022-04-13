<?php
	session_start();
	//initialize cart if not set or is unset
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	//unset qunatity
	unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple Shopping Cart using Session in PHP</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default" style="background-color:#000;">
	  <div class="container-fluid">
	    <div class="navbar-header">
	 
	      <a class="navbar-brand" href="#">Online Shopping Centre</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<!-- left nav here -->
            <li><a  href="">Products</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
			<li>
				<a href="view_cart.php"><span class="badge">
				<?php echo count($_SESSION['cart']); ?></span><span class="glyphicon glyphicon-shopping-cart"></span>
                </a>
            </li>
            <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span>Login</a>
            <?php include'Login.php' ?>
            </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<?php
		//info message
		if(isset($_SESSION['message'])){
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
				</div>
			</div>
			<?php
			unset($_SESSION['message']);
		}
		//end info message
		//fetch our products	
		//connection
		$conn = new mysqli('localhost', 'root', '', 'Ecommerce_db');

		$sql = "SELECT * FROM products_tbl";
		
		
	$query = mysqli_query($conn,$sql);
		//$query = $conn->query($sql);
		
		while($row =mysqli_fetch_assoc($query)){ //$query->fetch_assoc() 
			
			?>
			<div class="col-sm-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row product_image">
							<img src="<?php echo $row['pro_img'] ?>" width="80%" height="auto">
						</div>
						<div class="row product_name">
							<h4><?php echo $row['pro_name']; ?></h4>
						</div>
						<div class="row product_footer">
							<p class="pull-left"><b>$<?php echo $row['pro_price']; ?></b></p>
							<span class="pull-right"><a href="add_cart.php?id=<?php echo $row['pro_id']; ?>" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-plus">
                            </span> Cart</a></span>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
	
		
		//end product row 
	?>
</div>
</body>
</html>