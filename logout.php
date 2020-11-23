<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
}
else{
    unset($_SESSION['email']);
    unset($_SESSION['user_id']);
    session_destroy();
    header('location: index.php');
}
