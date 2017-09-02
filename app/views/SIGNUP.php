<!doctype html>
<html lang="en_US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to homepage | website name</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css">
<!--        <link rel="stylesheet" href="<?php echo URL; ?>public/css/admin.css">-->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/style2.css">
<!--        <style>
            body{
                background:url(public/img/admin/bg-login.jpg);
                background-attachment:fixed;
                background-size:cover;
            }
        </style>-->
    </head>

    <body>
        <header class="site-header">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <img src="<?php echo URL; ?>public/img/gantabya.png">
                    </div>
                    <div class="col-md-8">
                        <h1>Travel & Tourism Management Portal</h1>
                    </div>
                </div>
            </div>
            <div class="site-nav">
                <nav class="navbar">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li><a href="<?php echo URL;?>default">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Top Destinations</a></li>
                            <li><a href="#">Contact Us</a></li>

                            
                            <li class="pull-right"><a href="<?php echo URL; ?>SignIN"><i class="fa fa-sign-in"></i>SignIN</a></li>
                        </ul>

                    </div>
                </nav>
            </div><!--end of site-nav-->
        </header>
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="user-login">
                    <div class="panel panel-info">
                        <div class="panel-heading"><i class="fa fa-user-circle icon"></i><h4 class="text-center">USER REGISTRATION</h4></div>
                        <div class="panel-body">
                            <form action="#" method="post" class="form-group">
                                <p class="text-danger"><?php
                                    if (isset($_REQUEST['submit'])) {
                                        echo $this->msg;
                                    }
                                    ?></p>
                                <label>Name</label>
                                <input type="text" placeholder="name" class="form-control" name="name" required><br>
                                <label>Age</label>
                                <input type="number" placeholder="age" class="form-control" name="age" required><br>
                                <label>Phone Number</label>
                                <input type="number" placeholder="phone number" class="form-control" name="phone" required><br>
                                <label>Email</label>
                                <input type="text" placeholder="email" class="form-control" name="email" required><br>
                                 <label>Password</label>
                                 <input type="password" placeholder="password" class="form-control" name="password" required><br>
                                <label>Nationality</label>
                               <select class="form-control" name="nationality">
                      <option>Nepal</option>
                      <option>USA</option>
                      <option>Canada</option>
                      <option>China</option>
                      <option>Japan</option>
                      <option>Korea</option>
                      <option>China</option>
                      <option>England</option>
                      <option>Scotland</option>
                      <option>Spain</option>
                  </select><br>
                                <button type="submit" class="btn btn-info btn-block" name="submit">REGISTER</button>
                                
<!--//                                            if(isset($_POST['submit'])){
//                                                
//                                                
//                                                echo "<script>alert('".$this->msg."'); </script>";
//                                            }
//                                            -->
                                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--scripts-->
        <script src="<?php echo URL; ?>public/js/jquery-3.2.0.min.js"></script>
        <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
    </body>
</html>


