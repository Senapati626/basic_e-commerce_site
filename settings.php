<?php
require 'includes/common.php';
?>
<?php
if(!isset($_SESSION['email'])){
header('location: index.php');
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
        <title>Login</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container" style="padding-top: 100px;"><div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Change Password</h1>
                </div><br>
                <form method="post" action="settings_script.php">
                        <input type="password" class="form-control form-group" name="old_pass" placeholder="Old Password">
                        <input type="password" class="form-control form-group" name="new_pass" placeholder="New Password">
                        <input type="password" class="form-control form-group" name="ret_pass" placeholder="Re-type new password">
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div></div>
        </div>
         <?php include 'includes/footer.php'; ?>
        
    </body>
</html>
