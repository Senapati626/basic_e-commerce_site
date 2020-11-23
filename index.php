<?php
require 'includes/common.php';?>
<?php
if (isset($_SESSION['email'])){
    header('location: products.php');
}
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="banner_image"><div class="inner_img">
            <div class="container">
                <div class="banner_content">
                    <h1>We sell lifestyle</h1>
                    <p>Flat 40% off on premium products.</p>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div> 
            </div>
            </div></div><br>
        <div class="container">
        <div class="row text-center">
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                    <img src="img/1.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Cameras</h3>
                        <p>Choose from the best in the world</p>
                        <a href="products.php" class="btn btn-primary btn-block">Shop Now</a>
                    </div>
                </div>

                   
                
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                        <img src="img/7.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Watches</h3>
                        <p>Original watches from the best brand</p>
                        <a href="products.php" class="btn btn-primary btn-block">Shop now</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                    <img src="img/8.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Shirts</h3>
                        <p>Our exquisite collection of shirts</p>
                        <a href="products.php" class="btn btn-primary btn-block">Shop now</a>
                    </div>
                </div></div></div>

                         <br>    
       <?php include 'includes/footer.php';
       ?>

    </body>
</html>
