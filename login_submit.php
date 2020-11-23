<?php
require 'includes/common.php';
$email = $_POST['email'];
$password = $_POST['password'];
$select_query = "SELECT id, email FROM users WHERE email = '". $email ."' AND password = '". $password ."'";
$select_query_result = mysqli_query($con, $select_query);
$num = mysqli_num_rows($select_query_result);
if ($num == 0){
    echo "<script>alert('username or password incorrect')</script>";
    echo "<script>location.href='login.php'</script>";
}
else{
        $row = mysqli_fetch_array($select_query_result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
    }
?>
