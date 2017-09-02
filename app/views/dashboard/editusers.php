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

                
            
             <div class="col-md-10" style="background: #fff">

                        <h3>Edit User</h3
                        <?php foreach ($this->user as $admin) {?>
                           
                                
                            <form action="<?php echo URL; ?>editusers/update" method="get" class="form-group">
                                
                                <div class="form-group">
                                    <input type="hidden" name="s_n" value="<?php echo($admin[0]); ?>">
                                    <br>

                                    <label>username</label><input type="text" class="form-control" name="uname"  value="<?php echo($admin[1]); ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Date_of_birth</label>
                                    <input type="text" class="form-control" name="dname" value="<?php echo($admin[3]); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Address</label><input type="text" class="form-control" name="add" value="<?php echo($admin[4]); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label><input type="number" class="form-control" name="contact" value="<?php echo($admin[5]); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label><input type="text" class="form-control" name="email" value="<?php echo($admin[6]); ?>">
                                </div>


                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"  name="update">UPDATE</button>
                                </div>

                            </form>

                        <?php } ?>

                    </div>
        </div>
    </div>
</main>
 <?php
require_once 'site_footer.php';
?>
