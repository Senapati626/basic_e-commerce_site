<?php
require 'includes/common.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = $password;
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address']; 
$select_query_reg = "SELECT * FROM users WHERE email = '$email'";
$reg_results = mysqli_query($con, $select_query_reg);
$reg_detail = mysqli_num_rows($reg_results);
if($reg_detail > 0){
    echo "user already exists";
}
 else {
$user_registration_query = "INSERT INTO users(name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$user_id = mysqli_insert_id($con);
$_SESSION['email'] = $email;
$_SESSION['user_id'] = $user_id;
header('location: products.php');}
?>



