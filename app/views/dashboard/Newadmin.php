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
                     <div class="col-md-6"><h3>New Admin</h3></div>
                      </div> 
                     <div class="row">
                           <?php
                                            if(isset($_REQUEST['passworderror'])){
                                               
                                               
                                               echo "invalid password";
                                            }
                                            else if(isset ($_REQUEST['numbererror'])){
                                                echo "invalid number";
                                            }
                                            
                                            ?>   
                         <form name="newadmin" action="<?php echo URL.'Newadmin/create'; ?>" method="post" class="form-group">
			
                                    	
                             <div class="form-group">
                                                    <label>username</label><input type="text" placeholder="name" class="form-control" name="uname" required>
						</div>
						<div class="form-group">
							<label>password</label>
                                                        <input type="password" placeholder="password" class="form-control" name="pass" required>
						</div>
						<div class="form-group">
                                                    <label>Date of Birth</label><input type="date" placeholder="date of birth" class="form-control" name="dname" required>
						</div>
                                            <div class="form-group">
                                                    <label>Address</label><input type="text" placeholder="address" class="form-control" name="add" required>
						</div>
						<div class="form-group">
							<label>Phone</label><input type="number" placeholder="phone number" class="form-control" name="contact" required>
						</div>
						<div class="form-group">
                                                    <label>Email</label><input type="email" placeholder="email" class="form-control" name="email" required>
                                                </div>
                                                <div class="form-group">
							<button type="submit" class="btn btn-success" name="submit">Create</button>
                                                </div>
                                                  
              
                         </form>
                     </div>
                 
            </div>

        </div>
    </div>
    <!--end of container-->
</main>
<?php
require_once 'site_footer.php';
?>


