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
                                
                                 <li class="pull-right"><a href="<?php echo URL ;?>SIGNUP"><i class="fa fa-sign-in"></i>Register</a></li>
                                <li class="pull-right"><a href="<?php echo URL ;?>SignIN"><i class="fa fa-sign-in"></i>SignIN</a></li>
			</ul>
                    
		</div>
	</nav>
	</div><!--end of site-nav-->
	
        </header>
        <main class="site-main">
          <div class="col-md-12" style="background: white; margin-top: 20px;">
            <div class="row">
                <div class="col-md-12"><h3 class="text-center">Places To Visit</h3></div>
            </div>
            
            
                <?php foreach ($this->place as $places){?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h2><?php echo $places[1];?></h2>
                    </div>
                    <div class="panel-body">
                        <img src="<?php echo $places[3];?>">
                    </div>
                    <div class="panel-footer text-justify">
                        <p><?php echo $places[2];?></p>
                    </div>
                 
                </div>
                   </div>
                <?php } ?>
         
            
            
        </div><!-- end of places-->
            
            
            
            
        <div class="col-md-12" style="background: white; margin-top: 20px;">
            <div class="row">
                
                <div class="col-md-12"><h3 class="text-center">HOTELS</h3></div>
                
            </div>
            <div class="row">

                <table class="table-bordered table-bordered">
                    <tr class="text-info">

                        <th>Hid</th>
                        <th>Name</th>
                        <th>Address</th>
                        
                        <th>Price Description</th>
                        <th>Picture</th> 
                        <th>Packages</th>
                        <th>Booking</th>
                    </tr>
                    <?php foreach($this->h as $hotel){?>
                                                <tr>
                                                    <th><p><?php echo $hotel[0];?></p></th>
                                                    <th><p><?php echo $hotel[1];?></p></th>
                                                    <th><p><?php echo $hotel[2];?></p></th>
                                                    
                                                    <th><p><?php echo $hotel[4];?></p></th>
                                                    <th><img src="<?php echo $hotel[6];?>" width="200px" height="150px"></th>
                                                    <th><a href="<?php echo URL . 'Hotelpackages?id=' . $hotel[0];?>"><button class="btn btn-info">Package </button></a></th>
                                                    <th><a href="<?php echo URL . 'booking?id=' . $hotel[0];?>"><button class="btn btn-info">Book now</button></a></th>
                                                    
                                                 
                                                 
                                               
                           
                                               
                            </th>
                                                </tr>
                                                       
                                               <?php }?>
                </table>

            </div>     
        </div><!--end of hotel-->

        <!--start of transport-->            
        <div class="col-md-12" style="background: white; margin-top: 20px;">
            <div class="row">
                <div class="col-md-12"><h3 class="text-center">TRANSPORTATIONS</h3></div>

            </div>
            <div class="row">

                <table class="table-bordered table-bordered">
                    <tr class="text-info">

                        <th>TransID</th>
                        <th>TransportName</th>
                        <th>NumberPlate</th>
                        <th>Departure Spot</th>
                        <th>Price</th>
                        <th>Picture</th> 
                        <th>Booking</th> 
                        
                    </tr>
                    <?php foreach($this->trans as $transport){?>
                                                <tr>
                                                    <th><p><?php echo $transport[0];?></p></th>
                                                    <th><p><?php echo $transport[1];?></p></th>
                                                    <th><p><?php echo $transport[3];?></p></th>
                                                    <th><p><?php echo $transport[6];?></p></th>
                                                    <th><p><?php echo $transport[7];?></p></th>
                                                    <th><img src="<?php echo $transport[8];?>" width="200px" height="150px"></th>
                                                    <th><a href="<?php echo URL . 'transportbooking?tid=' . $transport[0];?>"><button class="btn btn-info">Booking</button></a></th>
                                                    
                                                    
                                                 
                                                 
                                               
                           
                                               
                            </th>
                                                </tr>
                                                       
                                               <?php }?>
                </table>

            </div>     
        </div><!--end of transport-->
        
        
               
            
        </main><!--end of main-->

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
