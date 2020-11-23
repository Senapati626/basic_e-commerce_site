<?php
include 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
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
        <title>Success</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        $query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '".$user_id."'";
        $query_result = mysqli_query($con, $query);
        ?>
        <div class="container jumbotron">
            <center><h2>Your order has been confirmed.</h2>
                <i><a href="products.php">Click here</a> to continue shopping</i></center>
            
        </div>
    </body>
</html>
