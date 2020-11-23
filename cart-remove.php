<?php
require 'includes/common.php';
if(isset($_GET['id'])){
    $item_id = $_GET["id"];
    $user_id = $_SESSION['user_id'];
    $query16 = "DELETE FROM users_items WHERE item_id = '$item_id' AND user_id = '$user_id'";
    $query16_reault = mysqli_query($con, $query16) or die(mysqli_error(con));
    header('location: cart_1.php');
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

