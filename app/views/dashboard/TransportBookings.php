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
                                        <div class="col-md-6"><h3>Transport Bookers</h3></div>
                                        
                                </div>
                                <div class="row">

                                        <table class="table-bordered table-posts">
                                                <tr class="text-info">
                                                        
                                                        <th>Booker_id</th>
                                                        
                                                        <th>Number_of_Members</th>
                                                        <th>TransID</th>
                                                        <th>TransportName</th>
                                                        <th>Image</th>
                                                        <th>token_id</th>
                                                        <th>Booked For</th>
                                                        <th>Status</th>
                                                            
                                                            
                                                       
                                                        
                                                </tr>
                                                <?php foreach($this->trans as $transportbookers){?>
                                                <tr>
                                                    <th><?php echo $transportbookers[0];?></th>
                                                    <th><?php echo $transportbookers[1];?></th>
                                                    <th><?php echo $transportbookers[2];?></th>
                                                    <th><?php echo $transportbookers[3];?></th>
                                                    <th><img src="<?php echo $transportbookers[4];?>" width="100px"</th>
                                                    <th><?php echo $transportbookers[5];?></th>
                                                    <th><?php echo $transportbookers[6];?></th>
                                                 <th><?php echo $transportbookers[7];?></th>
                                                 
                                               
                           
                                               
                            
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





