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
                
                <div class="panel panel-info">
                    <div class="panel-heading text-center"><a href="<?php echo URL;?>places">Places</a></div>
                </div>
                
                </div>
                
            <div class="col-md-10" style="background: white; margin-top: 20px;">
                <div class="row">
                    <div class="col-md-6"><h3>All Packages</h3></div>
                    
                </div>
                <div class="row">
                    <?php
                    foreach($this->package as $packages){?>
                        
                        
                    
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               
                                <button class="btn btn-info">Package_id: <?php echo $packages[0];?></button>
                                 <button class="btn btn-info">Hotel ID: <?php echo $packages[1];?></button>
                                 <th class="text-center"><a href="<?php echo URL . 'editpackage?id=' . $packages[0];?>"><i class="fa fa-edit"></i> </a>
                                     <a href="#" onclick='deleteData("<?php echo $packages[0]; ?>")'> &nbsp;&nbsp;<i class="fa fa-times-rectangle-o"></i></a>
                            </div>
                            <div class="panel-body">
                                <img src="<?php echo $packages[3];?>" height="200px" width="100%">
                            </div>
                            <div class="panel-footer">
                                <p><?php echo $packages[2];?></p>
                            </div>
                        </div>
                    </div>
                        
                    
                    <?php } ?>
                        
                    
                </div>
                
            </div>
                
            </div>
            

        </div>
    </div>
    <!--end of container-->
</main>
<?php
require_once 'site_footer.php';
?>
<script>
        function deleteData(pakid){
                var conf = confirm("Are you sure ?");
                if(conf){
                        window.location.href='packages?Package_id='+pakid;
                }
        }
        </script>


