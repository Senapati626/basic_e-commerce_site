<?php
 require 'includes/common.php';
 ?>
<?php
if (isset($_SESSION['email'])){
    header('location: products.php');
    
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
        <?php
        include 'includes/header.php';
        ?>
        <div class="container content" style="padding-top: 100px;">
            <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h1>LOGIN</h1>
                </div>
                <div class="panel-body">
                    <p class="text-warning">Login to make a purchase</p><br>
                    <form method="post" action="login_submit.php">
                        <input type="text" class="form-control form-group" name="email" placeholder="Email ID"><br>
                        <input type="password" class="form-control form-group" name="password" placeholder="Password"><br>
                        <button type="submit" class="btn btn-primary">Login</button><br>
                    </form>
                </div>
                <div class="panel-footer">
                    Don't have an account? <a href="signup.php">Register</a>
                </div>
            </div></div>
        </div>
        <?php        include 'includes/footer.php';
        ?>
        
    </body>
</html>
