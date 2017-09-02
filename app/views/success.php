<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Travels nad tours</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/style2.css">
    </head>
    <body>
        <header class="site-header">
            <div class="container-fluid">
        <div class="col-md-12">
        <div class="col-md-4">
            <img src="<?php echo URL;?>public/img/gantabya.png">
        </div>
            <div class="col-md-8">
                <h1>Travel & Tourism Management Portal</h1>
            </div>
        </div>
    </div>
      <div class="site-nav">
	<nav class="navbar">
		<div class="col-md-12">
			<ul class="nav nav-tabs">
				<li><a href="<?php echo URL;?>default">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Top Destinations</a></li>
				<li><a href="#">Contact Us</a></li>
                                <li class="pull-right"><a href="<?php echo URL;?>welcomeuser"><i class="fa fa-user-circle">Profile</i></a></li>
                               
			</ul>
                    
		</div>
	</nav>
	</div><!--end of site-nav-->
        </header>
<form>
    <div class="success">
     
        <?php
        if(isset($_REQUEST['hotelsubmit'])){
     echo '<h1>Booking has been successful!! your token ID is:</h1>'; 
     echo "<h1>".$this->bookerid."</h1>" ;
        }
?>
        <?php
        if(isset($_REQUEST['transportsubmit'])){
     echo '<h1>Booking has been successful!! your token ID is:</h1>'; 
     echo "<h1>".$this->transportbookerid."</h1>" ;
        }
?>
         
    </div>
    
</form>

</body>
    <script src="<?php echo URL; ?>public/js/jquery-3.2.0.min.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
    <script>
 $(document).ready(function(){
		$('#myModal').modal('show')	;			   
						   
});

    </script>
</html>