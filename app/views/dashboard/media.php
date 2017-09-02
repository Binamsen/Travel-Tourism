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
                <div>
                      <form name="myform" action="<?php echo URL; ?>media/store" method="post" class="form-group" enctype="multipart/form-data">
                          <input type="file" name="photo">
                          <button type="submit" class="btn btn-info" name="submit">Upload</button>
                    </form>
                    
                </div>
<?php
$dir    = 'public/images/uploads/';
$path =URL.'public/images/uploads/';
$files = scandir($dir);
foreach ($files as $item){
    if(!is_dir($item)){

    ?>
                <figure>
                    <img src="<?php echo $path.$item; ?>" width="100px" class="img-thumbnail">
                    <caption> <?php 
                   
                    echo $item;
                    ?></caption>
                </figure>
                
   <?php 
    }
}
?>
              
            </div><!--end of col-md-10-->

        </div>
    </div>
    <!--end of container-->
</main>
<?php
require_once 'site_footer.php';
?>



