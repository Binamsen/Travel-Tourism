<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>CMSSITE | Dashboard</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/admin.css">
    </head>
    

    <body>
        <header class="site-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        
                        <a href="<?php echo URL.'default'; ?>" class="text-light-green" target="new"> | visit site</a>
                        <a href="<?php echo URL.'dashboard' ?>" class="text-light-green"> | <i class="fa fa-home"></i> Home</a>
                    </div>
<!--                    <div class="col-md-1">
                        <a href="<?php echo URL;?>Messages"><i class="fa fa-envelope icon"></i></a>
                    </div>-->
                    <div class="col-md-8">
                        <ul class="user pull-left">
                            <a href="#"><li><i class="fa fa-plus"></i> |New</a>
                                <ul>
                                    
                                     <li><a href="<?php echo URL; ?>Newadmin">Admin</a></li>
                                      <li><a href="<?php echo URL; ?>Newhotel">Hotel</a></li>
                                      <li><a href="<?php echo URL; ?>newtransport">Transport</a></li>
                                      <li><a href="<?php echo URL; ?>newplaces">Places</a></li>
                                         
                                </ul>
                            </li>
                        </ul>
                        
                        <ul class="user col-md-3 pull-right">
                            <li class="pull-right"><span class="fa fa-user icon"></span> | <a href="#"> <?php echo $_SESSION['admin']; ?></a>
                                <ul>
                                    <li><a href="#"> Edit Profile</a></li>
                                     <li><a href="#"> Settings</a></li>
                                     <li><a href="<?php echo URL; ?>logout"> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </header>
