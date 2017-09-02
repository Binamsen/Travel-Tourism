<!doctype html>
<html lang="en_US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to homepage | website name</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/admin.css">
        <style>
            body{
                background:url(public/img/admin/bg-login.jpg);
                background-attachment:fixed;
                background-size:cover;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="user-login">
                    <div class="panel panel-info">
                        <div class="panel-heading">Admin Login</div>
                        <div class="panel-body">
                            <form action="#" method="post" class="form-group">
                                <p class="text-danger"><?php
                                    if (isset($_REQUEST['submit'])) {
                                        echo $this->msg;
                                    }
                                    ?></p>
                                <input type="text" placeholder="username" class="form-control" name="username" required><br>
                                <input type="password" placeholder="password" class="form-control" name="password" required><br>
                                
                                <button type="submit" class="btn btn-info btn-block" name="submit">Login</button>
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


