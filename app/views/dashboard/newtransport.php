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
           
                    <div class="col-md-6"><h3>New Transport</h3></div>
                </div>
                    <div class="row">
                        <?php 
                        if(isset($_REQUEST['numbererror'])){
                            echo "invalid contact number";
                        }
                        ?>
                        <form name="newtransport" action="<?php echo URL.'newtransport/create'; ?>" method="post" class="form-group" enctype="multipart/form-data">
						<div class="form-group">
							<label>TransportName</label><input type="text" placeholder="name" class="form-control" name="tname" required>
						</div>
						<div class="form-group">
							<label>Contact</label>
                                                        <input type="text" placeholder="contact" class="form-control" name="contact" required>
						</div>
						<div class="form-group">
                                                    <label>NumberPlate</label><input type="text" placeholder="numberplate" class="form-control" name="nplate" required>
						</div>
                                            <div class="form-group">
                                                    <label>Destination_from</label><input type="text" placeholder="destination from" class="form-control" name="from">
						</div>
                                                <div class="form-group">
                                                    <label>Destination_to</label><input type="text" placeholder="destination to" class="form-control" name="to">
						</div>
						<div class="form-group">
							<label>DepartureSpot</label><input type="text" placeholder="departure spot" class="form-control" name="spot">
						</div>
						<div class="form-group">
                                                    <label>Price</label><input type="text" placeholder="price" class="form-control" name="price">
                                                </div>
                                            <div class="form-group">
                                               
                                
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Select Picture
                            </button>
                            <input type="text" id="pic" name="pic" class="form-control" readonly>
                        </div>
				
						<div class="form-group">
							<button type="submit" class="btn btn-success" name="submit">Create</button>
                                                        <button type="reset" class="btn btn-danger">Cancel</button>
						</div>
					</form>
                        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Select Picture</h4>
                                </div>
                                <div class="modal-body">
                                  <?php 
                                  $dir = 'public/images/uploads/';
                                  $path = URL .'public/images/uploads/';
                                  $files = scandir($dir);
                                  foreach ($files as $item){
                                      if(!is_dir($item)){
                                       ?>   
                                      <img src="<?php echo $path . $item; ?>" width="100px" class="img-thumbnail" onclick="setPath('<?php echo $path . $item; ?>')" data-dismiss="modal">
                                       <?php
                                      }
                                  }
                                      ?>
                                    
                                  
                                  
                                  
                                  
                                </div><!--end of modal body-->
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                </div>
					
				</div><!--end of modal content-->
               
            </div><!--end of col-md-10-->

        </div>
                    </div>
            </div>
        </div>
    </div>
    <!--end of container-->
</main>
<script>
   function setPath(path){
   var f = document.forms['newtransport'];
   f.pic.value =path;
   }
</script>

    <?php
require_once 'site_footer.php';
?>



