<?php require_once 'site_header.php'; ?>


<main class="site-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading text-center"><a href="<?php echo URL;?>dashboard"><i class="fa fa-dashboard"></i>  Dashboard</a></div>
                    <ul class="list-group">
                       
                    </ul>
                </div>

                 <div class="panel panel-info">
                    <div class="panel-heading text-center"><a href="#"><i class="fa fa-users"></i> Users</a></div>
                    <ul class="list-group">
                        <li class="list-group-item text-center"><a href="<?php echo URL; ?>Subscribers">Registered Users</a></li>
                        <li class="list-group-item text-center"><a href="<?php echo URL; ?>Allusers">Admin Users</a></li>
                    </ul>
                </div>
                
                 <div class="panel panel-info">
                    <div class="panel-heading text-center"><a href="#"><i class="fa fa-users"></i> Media</a></div>
                    <ul class="list-group">
                        <li class="list-group-item text-center"><a href="<?php echo URL; ?>media">media</a></li>
                       
                    </ul>
                </div>
                
                <div class="panel panel-info">
                    <div class="panel-heading text-center"><a href="<?php echo URL;?>Hotels"><i class="fa fa-hotel"></i>Hotels</a></div>
                    <ul class="list-group">
                        <li class="list-group-item text-center"><a href="<?php echo URL;?>HotelBookings">Hotel Bookings</a></li>
                      </ul>  
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading text-center"><a href="<?php echo URL;?>Transport"><i class="fa fa-hotel"></i>Transportation</a></div>
                    <ul class="list-group">
                        <li class="list-group-item text-center"><a href="<?php echo URL;?>TransportBookings">Transport Bookings</a></li>
                      </ul>  
                </div>
            
                
                
            </div><!--end of col-md-2-->
                        
            <div class="col-md-10" style="background: white; margin-top: 20px;">
                  <div class="row">
                                        <div class="col-md-6"><h3>Hotel Bookers</h3></div>
                                        
                                </div>
                                <div class="row">

                                        <table class="table-bordered table-posts">
                                                <tr class="text-info">
                                                        
                                                        <th>Booker_id</th>
                                                        <th>Number of members</th>
                                                        
                                                       
                                                        <th>Hid</th>
                                                        <th>Hotel_Name</th>
                                                        <th>Image</th>
                                                        <th>Token_ID</th>
                                                        <th>Booked For</th>
                                                        <th>Status</th>
                                                       
                                                        
                                                </tr>
                                                <?php foreach($this->book as $bookers){?>
                                                <tr>
                                                    <th><?php echo $bookers[0];?></th>
                                                    <th><?php echo $bookers[1];?></th>
                                                    <th><?php echo $bookers[2];?></th>
                                                    <th><?php echo $bookers[3];?></th>
                                                    <th><img src="<?php echo $bookers[4];?>" width="100px"></th>
                                                    <th><?php echo $bookers[5];?></th>
                                                    <th><?php echo $bookers[6];?></th>
                                                     <th><?php echo $bookers[7];?></th>
                                                    
                                                 
                                                 
                                               
                           
                                               
                            
                                                </tr>
                                                       
                                               <?php }?>
                                                
                                               
                                               
                                        </table>
                              
                                </div>     
            </div>

        </div>
    </div>
    <!--end of container-->
</main>
<?php
require_once 'site_footer.php';
?>

