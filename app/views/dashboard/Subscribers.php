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
            
                </div>

                
            
            <div class="col-md-10" style="background: white; margin-top: 20px;">
                  <div class="row">
                                        <div class="col-md-6"><h3>All Subscribers</h3></div>
                                        
                                </div>
                                <div class="row">

                                        <table class="table-bordered table-posts">
                                                <tr class="text-info">
                                                        
                                                        <th>Sid</th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Phone Number</th>
                                                        <th>Email</th>
                                                        <th>Nationality</th>
                                                </tr>
                                                <?php foreach($this->subscriber as $subscribers){?>
                                                <tr>
                                                    <th><?php echo $subscribers[0];?></th>
                                                    <th><?php echo $subscribers[1];?></th>
                                                    <th><?php echo $subscribers[2];?></th>
                                                    <th><?php echo $subscribers[3];?></th>
                                                    <th><?php echo $subscribers[4];?></th>
                                                    <th><?php echo $subscribers[6];?></th>
                                                 
                                                 
                                               
                           
                                               
                            </th>
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



