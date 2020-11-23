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
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>

        <div class="container content" style="padding-top: 100px;"><div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h1>SIGN UP</h1>
                </div>
                <div class="panel-body">
                    <p class="text-warning">Sign up now</p><br>
                    <form method="post" action="signup_script.php">
                        <input type="text" class="form-control form-group" name="name" placeholder="Full Name"><br>
                        <input type="email" class="form-control form-group" name="email" placeholder="Email ID"><br>
                        <input type="password" class="form-control form-group" name="password" placeholder="Password"><br>
                        <input type="number" class="form-control form-group" name="contact" placeholder="Contact number"><br>
                        <input type="text" class="form-control form-group" name="city" placeholder="City"><br>
                        <input type="text" class="form-control form-group" name="address" placeholder="Address"><br>
                        <button type="submit" class="btn btn-primary">Sign Up</button><br>
                    </form>
                </div>
                <div class="panel-footer">
                    Welcome to the world of lifestyle
                </div>
            </div>
            </div></div>
        <?php        include 'includes/footer.php';
        ?>
    </body>
</html>
