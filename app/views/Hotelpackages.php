<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Travels nad tours</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/style2.css">
    </head>
    <body>
        <header class="site-header">
            <div class="container-fluid">
        <div class="col-md-12">
        <div class="col-md-4">
            <img src="<?php echo URL;?>public/img/gantabya.png">
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
                                
                                <li class="pull-right"><a href="<?php echo URL ;?>SIGNUP">Register</a></li>
                                <li class="pull-right"><a href="<?php echo URL ;?>SignIN">SignIN</a></li>
			</ul>
                    
		</div>
	</nav>
	</div><!--end of site-nav-->
	
        </header>
        
        <main class="site-main">
            <div class="col-md-12" style="background: white; margin-top: 20px;">
            <div class="row">
                <div class="col-md-12"><h3 class="text-center">Packages</h3></div>
            </div>
            
            
                <?php foreach ($this->package as $packages){?>
            <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              
                                 <button class="btn btn-info">Hotel ID: <?php echo $packages[1];?></button>
                                 
                            </div>
                            <div class="panel-body">
                                <img src="<?php echo $packages[3];?>" height="200px" width="200px;">
                            </div>
                            <div class="panel-footer">
                                <p><?php echo $packages[2];?></p>
                            </div>
                        </div>
                    </div>
                        
                <?php } ?>
         
            
            
        </div><!-- end of places-->
            
        </main>
        
        <div class="site-footer">

            <div class="col-md-12 text-center">
                <h2>Get Connected</h2>
                <a href="#"><i class="fa fa-facebook-f"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>



            <div class="col-md-12 text-center">
                <h2>Contact Us</h2>
                <p>Post Box: 10988 | Chaksibari Marg, Thamel, Kathmandu, Nepal | Tel: +977 1 4253029 | Mobile: +977 9841697870 | Email: GantabyaT&T@gmail.com</p>
            </div>
        </div><!--end of site-footer-->
        <button class="site-buttom">

            <div class="col-md-12 text-center">
                <p>&copy; Gantabya Tours & Travel Pvt.Ltd. | All Rights Reserved</p>
                <p>All contents and photographs within this website is © by Gantabya Tours & Travel and may not be reproduced without our permission.</p>
            </div>
        </button>

    </body>
    <script src="<?php echo URL; ?>public/js/jquery-3.2.0.min.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
</html>

