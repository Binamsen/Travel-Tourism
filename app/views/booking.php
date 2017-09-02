<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Travels nad tours</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/booking.css">
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
                                
			</ul>
                    
		</div>
	</nav>
	</div><!--end of site-nav-->
        </header><!--end os header-->
        
        <section class="site-section">
            <div class="well">
                <h2 class="text-center"> Hotel Booking</h2>
               
                <?php
                $rand =rand(100000,999999);
           
                foreach($this->h as $hotel){?>
                <button class="btn btn-info">Hotel ID: <?php echo $hotel[0];?></button>
                    
                
                <form action="<?php echo URL;?>success?id=<?php echo $hotel[0]; ?>" class="form-group" method="post">
                    <input type="hidden" value="<?php echo Session::getUserID('uid'); ?>" name="uid">
                    <div class="form-group">
                    <label>token</label>
                    <input type="text" name="token"  value="<?php echo $rand;?>" class="form-control" readonly>
                    </div>  
                   <div class="form-group">
                    <label>Hotel Name</label>
                    <input type="text" name="hname"  value="<?php echo $hotel[1];?>" class="form-control" readonly>
                    </div> 
                    <input type="hidden" value="<?php echo $hotel[6];?>" name="picture">
                    <div class="form-group">
                       <label>Book For(Date)</label>
                       <input type="date" class="form-control" name="date">   
                   </div>
                    <div class="form-group">
                     <label>Number of members</label>
                    <select class="form-control" name="members" required>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                  </select>
                    </div>
                    <div class="form-group">
                     
                     
                        <button type="submit" class="btn btn-success" name="hotelsubmit">Book</button></a>

                    
                    </div>
                </form>
                <?php } ?><!--end of form-->
            </div><!--end os well-->
        </section><!--end os section-->
        
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


