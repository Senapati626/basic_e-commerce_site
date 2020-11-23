<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$old_pass = $_POST['old_pass'];
$old_pass = md5($old_pass);
$new_pass = $_POST['new_pass'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = md5($new_pass);
$ret_pass = $_POST['ret_pass'];
$ret_pass = mysqli_real_escape_string($con, $ret_pass);
$ret_pass = md5($ret_pass);

$query = "SELECT email, password FROM users WHERE email = '".$_SESSION['email']."'";
$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($query_result);
$orig_pass = $row['password'];

if($new_pass != $ret_pass){
    echo"<script>alert('New and rewritten passwords do not match')</script>";
    echo"<script>location.href = 'settings.php'</script>";
}
else{
    if ($orig_pass == $old_pass) {
    $query2 = "UPDATE users SET password = '".$new_pass."' WHERE email = '".$_SESSION['email']."'";
    $query2_result = mysqli_query($con, $query2) or die(mysqli_error($con));
    header('location: settings.php?error=Password updated succesfully');
}
else{
    echo "<script>alert('Wrong password entered')</script>";
    echo "<script>locatin.href = 'settings.php'</script>";
    
}
}
?>
