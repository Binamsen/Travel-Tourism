<?php require_once 'site_header.php'; ?>
<main class="site-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-dashboard"></i> Dashboard</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?php echo URL; ?>posts">Posts</a></li>
                        <li class="list-group-item"><a href="<?php echo URL; ?>pages">Pages</a></li>
                        <li class="list-group-item nav-divider"><a href="<?php echo URL; ?>comments">Comments</a></li>
                    </ul>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-users"></i> Users</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?php echo URL; ?>newuser">New User</a></li>
                        <li class="list-group-item"><a href="<?php echo URL; ?>allusers">All Users</a></li>
                    </ul>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-gear"></i> Settings</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?php echo URL; ?>settings">Site Details</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-10" style="background: #fff">

                <h3>Site Details</h3>
                <section>
                 
                            
                         
                       
                  <form action="<?php echo URL; ?>newpost/create" method="get" class="form-group">
                       <?php foreach ($this->site as $website){ ?>
                    <div class="form-group">
                        <label>Site Name</label><input type="text" class="form-control" name="sitename" value="  <?php echo $website[1]; ?>">
                    </div>
                    <div class="form-group">
                         <label>Slogan</label><input type="text" class="form-control" name="slogan" value="  <?php echo $website[2]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Company Address</label><input type="text" class="form-control" name="address" value="  <?php echo $website[3]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Phone</label><input type="text" class="form-control" name="phone" value="  <?php echo $website[4]; ?>">
                    </div>
                      <div class="form-group">
                        <label>E-mail</label><input type="text" class="form-control" name="email" value="  <?php echo $website[5]; ?>">
                    </div>
                      <div class="form-group">
                        <label>P.O. Box</label><input type="text" class="form-control" name="pobox" value="  <?php echo $website[6]; ?>">
                    </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"  name="submit">Update</button>
                        </div>
                      <?php  } ?>
                </form>
                </section>
                    
             
            </div>
        </div>
    </div>
    <!--end of container-->
</main>
<script>
 
</script>
<?php require_once 'site_footer.php'; ?>