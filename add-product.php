<?php
require_once "config.php";
if (isset($_POST['AddProducts'])) {
   $pname=$_POST['pname'];
   $descrip=$_POST['descrip'];
   $price=$_POST['price'];
   $stock=$_POST['stock'];

if (isset($_POST['p_image'])) {
  

   $image_name = $_FILES['p_image']['name'];
   $image_temp = $_FILES['p_image']['tmp_name'];
   $time = time();
   $path = "images/".$time.$image_name;

   if(move_uploaded_file($image_temp, $path))
   {
   $query="INSERT INTO `products_tbl`(`pro_img`, `pro_name`, `pro_descrip`, `pro_price`, `pro_stock`) VALUES ('$path','$pname','$descrip','$price','$stock')";
   $RUN=mysqli_query($con,$query);
   if ($RUN) {
   echo '<script> alert("Data Saved!"); </script>';
   header('Location: products.php');
   }
   else{
   echo '<script> alert("Data not Saved!"); </script>';
   }
   } 
 }
 else
 {
  
  $path = "images/no_image.jpg";
   $query="INSERT INTO `products_tbl`(`pro_img`, `pro_name`, `pro_descrip`, `pro_price`, `pro_stock`) VALUES ('$path','$pname','$descrip','$price','$stock')";
   $RUN=mysqli_query($con,$query);
   if ($RUN) {
   echo '<script> alert("Data Saved!"); </script>';
   header('Location: products.php');
   }
   else{
   echo '<script> alert("Data not Saved!"); </script>';
   } 
 }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap_admin.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/style_admin.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
<nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="products.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="accounts.php">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.php">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="add-product.php" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="pname"
                      name="pname"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                    id="descrip"
                    name="descrip"
                      class="form-control validate"
                      rows="3"
                      required
                    ></textarea>
                  </div>
                  <!-- <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                    >
                      <option selected>Select category</option>
                      <option value="1">New Arrival</option>
                      <option value="2">Most Popular</option>
                      <option value="3">Trending</option>
                    </select>
                  </div> -->
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="price"
                            >Price
                          </label>
                          <input
                            id="price"
                            name="price"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                            required
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Units In Stock
                          </label>
                          <input
                            id="stock"
                            name="stock"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <img class="tm-avatar" src="images/no_image.jpg" id="no_img">
                
                <div class="fileupload btn">
                  <span class="btn-text btn-primary btn-block text-uppercase">edit</span>
                  <input class="upload" type="file" id="input_file" name="p_image" accept="image/png,image/jpeg,image/jpg">
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="AddProducts" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 
 -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap_admin.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <!-- <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script> -->

    <script>
      $('#input_file').change(function () {
      if (this.files && this.files[0]) {
      var reader = new FileReader();
      reader.readAsDataURL(this.files[0]);
      reader.onload = function (x) {
      $('#no_img').attr('src', x.target.result);
      }
      }
      });
    </script>
  </body>
</html>
