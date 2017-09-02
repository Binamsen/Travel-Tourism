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
				
                                
                                
                                <li class="pull-right"><a href="<?php echo URL ;?>UserLogout"><i class="fa fa-sign-out">Logout</i></a></li>
                                
			</ul>
                    
		</div>
	</nav>
	</div><!--end of site-nav-->
        </header>
        
        <main class="site-main">
            <div class="col-md-12">
             <form action="<?php echo URL . 'search'; ?>" method="get">
                    <div class="col-md-3">
                            <label class="text-center">From</label>
                            <select class="form-control" name="from">
                                <?php 
                            foreach ($this->place as $places){?>
                                <option><?php echo $places[1];?></option>
                           <?php }?>
                            </select>
                    </div>
                   
                    <div class="col-md-3">
                        <label class="text-center">To</label>
                         
                        <select class="form-control" name="to">
                            <?php 
                            foreach ($this->place as $places){?>
                                <option><?php echo $places[1];?></option>
                           <?php }?>
                            
<!--                            <option>Chitwan</option>
                            <option>Lumbini</option>
                            <option>Mustang</option>-->
                        </select>
                         
                    </div>
                       
                    <div class="col-md-2">
                        <button class="btn btn-info btn-block" type="submit" name="search">Search</button>
                    </div>
                </form><!--end of form-->
            </div>
            <div class="col-md-12 text-center">
            <h3>Your Profile</h3>
            </div>
            <div class="col-md-12">
            <div class="col-md-3">
               
                <?php
               Session::getUserID('uid');
               
           
             
            
                foreach ($this->user as $subscribers){?>
                <div class="panel panel-default"> 
              <form class="form-group" method="get">
                <div class="form-group">
                    <label>Sid</label>
                    <input type="text" class="form-control" value="<?php echo($subscribers[0]);?>" readonly>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="<?php echo($subscribers[1]);?> ">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control" value="<?php echo($subscribers[2]);?> ">
                </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="bigint" class="form-control" value="<?php echo($subscribers[3]);?> ">
                </div>
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="<?php echo($subscribers[4]);?> ">
                </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" value="<?php echo($subscribers[5]);?> ">
                </div>
                 <div class="form-group">
                    <label>Nationality</label>
                    <input type="text" class="form-control" value="<?php echo($subscribers[6]);?> ">
                </div>
                  
                
            </form>
                </div>
                <?php }?>
                
             </div> <!--end of col-md-4-->
             
             
             
                <?php 
                   
                foreach ($this->bookedhotel as $bookedhotels){?>
                       
                       <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              
                                <h2> <?php echo $bookedhotels[3];?></h2>
                                 
                            </div>
                            <div class="panel-body">
                                <img src="<?php echo $bookedhotels[4];?>" height="200px" width="200px;">
                            </div>
                            <div class="panel-footer">
                                <p>Number of members: <?php echo $bookedhotels[1];?></p><br>
                                <p>Your TokenID is: <?php echo $bookedhotels[5];?></p>
                                <p>Booked For: <?php echo $bookedhotels[6];?></p>
                                
                                <a href="<?php echo URL.'welcomeuser/update?token='.$bookedhotels[5]; ?>"<button  class="btn btn-danger" name="update">Cancel Booking</button></a>
                            </div>
                        </div>
                           
                    </div>
             
                        
                <?php } ?>
             
             <?php 
                   
                foreach ($this->bookedtransport as $bookedtransports){?>
                      
                       <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              
                                <h2> <?php echo $bookedtransports[3];?></h2>
                                 
                            </div>
                            <div class="panel-body">
                                <img src="<?php echo $bookedtransports[4];?>" height="200px" width="200px;">
                            </div>
                            <div class="panel-footer">
                                <p>Number of members: <?php echo $bookedtransports[1];?></p><br>
                                <p>Your TokenID is: <?php echo $bookedtransports[5];?></p>
                                <p>Booked For: <?php echo $bookedtransports[6];?></p>
                                
                                <a href="<?php echo URL.'welcomeuser/update?token='.$bookedtransports[5]; ?>" <button class="btn btn-danger" name="update">Cancel Booking</button></a>
                            </div>
                        </div>
                           
                    </div>
                
                <?php } ?>
           
                     
             
            </div>
             
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
