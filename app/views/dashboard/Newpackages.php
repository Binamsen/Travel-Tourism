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
                    <div class="col-md-6"><h3>New Package</h3></div>
                    
                </div>
                <div class="row">
                    <?php
                    foreach ($this->h as $hotels){?>
                    <form name="newpackage" action="<?php echo URL.'Newpackages/create'; ?>" method="post" class="form-group" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Hid</label>
                            <input type="number" name="hid" class="form-group" value="<?php echo $hotels[0];?>">
                        </div>
                        <div class="form-group">
                        <label>Package Description</label><textarea  class="form-control" name="package"></textarea>
                    </div>
                        <div class="form-group">
                                               
                                
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Select Picture
                            </button>
                            <input type="text" id="pic" name="picture" class="form-control" readonly>
                        </div>
                        <div class="form-group">
							<button type="submit" class="btn btn-success" name="submit">Create</button>
                                                        <button type="reset" class="btn btn-danger">Cancel</button>
						</div>
                        
                    </form>
                    <?php }?>
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
    </div>
    <!--end of container-->
</main>
<script>
   function setPath(path){
   var f = document.forms['newpackage'];
   f.pic.value =path;
   }
</script>
<?php
require_once 'site_footer.php';
?>




