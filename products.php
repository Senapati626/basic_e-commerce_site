<?php
require 'includes/common.php';
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
        <title>Products</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php include 'includes/header.php';
         include 'includes/check-if-added.php';
        ?>
        <div class="container" style="padding-top: 100px;">
            <div class="jumbotron">
                <h1>Welcome to the Lifestyle Store</h1>
                <p>We have all the premium cameras, watches and shirts for you. No need to hunt around, all in one place.</p>
            </div>
          
                 
                    
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Canon EOS</h3>
                        <p>Price: Rs.30000</p>
                        <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(1)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs.40000</p>
                        <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(2)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php } } ?>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/3.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Price: Rs.50000</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if(check_if_added_to_cart(3)){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php? id=3" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/4.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs.80000</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(4)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=4" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                        

                        
                    </div>
                </div>
            </div><br>  
         
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/9.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price: Rs.13000</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(5)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=5" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/10.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs.8000</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(6)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=6" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/11.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price: Rs.5000</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(7)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=7" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/12.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Faber #111</h3>
                        <p>Price: Rs.8000</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(8)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=8" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                    </div>
                </div>
            </div><br> 
             <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/15.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>H & W</h3>
                        <p>Price: Rs.800</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(9)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=9" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/6.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Louis Phil</h3>
                        <p>Price: Rs.1000</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(10)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=10" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/13.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price: Rs.1800</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(11)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=11" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/14.jpg" alt="Responsive Image">
                    </div>
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price: Rs.1300</p>
                        <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{
                        if (check_if_added_to_cart(12)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else{ ?>
                        <a href="cart-add.php?id=12" class="btn btn-block btn-primary" name="add" value="add">Add to Cart</a>
                        <?php } } ?>

                    </div>
                </div>
             </div><br>

                
            
        </div>
        
        <?php        include 'includes/footer.php';
        ?>
    </body>
</html>
