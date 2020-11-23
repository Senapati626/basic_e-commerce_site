<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
header('location: login.php');
}
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
        <title>Cart</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body style="padding-top: 100px;">
         <?php
         include 'includes/header.php';
         ?>

        <div class="container" style="min-width: 600px;">
            <table class="table table-hover">
                <?php 
                $sum = 0;
                $user_id = $_SESSION['user_id'];
                $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to Cart'";
                $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
                $query_result_no = mysqli_num_rows($query_result);
                if($query_result_no >= 1){
                ?>
                <thead>
                <tr>
                    <th>Item No.</th>
                    <th>Item name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php 
                while($row = mysqli_fetch_array($query_result)){
                    $sum = $sum + $row["Price"];
                    $id = "";
                    $id .= $row["id"].",";
                echo 
                "<tr>
                     <td>" . "#" . $row["id"] . "</td>
                     <td>" . $row["Name"] . "</td>
                     <td>Rs " . $row["Price"] . "</td>
                     <td><a href='cart-remove.php?id={$row["id"]}'>Click here to cancel order </a></td>
                    
                </tr>";
                }
                $id = rtrim($id, ",");
                echo 
                "<tr>
                    <td></td>
                    <td>Total price</td>
                    <td>Rs ". $sum ."</td>
                    <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                </tr>";
                }
                if($query_result_no == 0){
                echo '<center><h2>Add items to cart first</h2></center>';
                }
                ?>
            </table>
        </div>
         <?php
                include 'includes/footer.php';
                ?>
    </body>
</html>
