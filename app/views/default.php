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
                        <img src="<?php echo URL; ?>public/img/gantabya.png">
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
                            <li class="active"><a href="#myCarousel">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#main">Top Destinations</a></li>
                            <li><a href="#contactus">Contact Us</a></li>

                            <li class="pull-right"><a href="<?php echo URL; ?>SIGNUP"><i class="fa fa-sign-in"></i>Register</a></li>
                            <li class="pull-right"><a href="<?php echo URL; ?>SignIN"><i class="fa fa-sign-in"></i>SignIN</a></li>
                        </ul>

                    </div>
                </nav>
            </div><!--end of site-nav-->




            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active"> <img src="<?php echo URL; ?>public/img/pictures/patan-durbar-square.jpg" alt="PATAN" >
                        <div class="carousel-caption">
                            <h3>
                                <bold>PATAN DURBAR SQUARE</bold>
                            </h3>
                        </div>
                    </div>
                    <div class="item"> <img src="<?php echo URL; ?>public/img/pictures/tallest_mountains_898054.jpg" alt="MOUNTAINS" >
                        <div class="carousel-caption">
                            <h3>
                                <bold>MOUNTAINS CALLING</bold>
                            </h3>
                        </div>
                    </div>
                    <div class="item"> <img src="<?php echo URL; ?>public/img/pictures/bhaktapur-durbar-square.jpg" alt="BHAKTAPUR" >
                        <div class="carousel-caption">
                            <h3>
                                <bold>BHAKATPUR DURBAR SQUARE</bold>
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls --> 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
        </header>
        <!--end header-content--> 
        <!--trip form-->
        <aside class="site-aside">
            <div class="col-md-12">
                <h1 class="text-center">FIND YOUR NEXT TRIP</h1>
                <form action="<?php echo URL . 'search'; ?>" method="get">
                    <div class="col-md-3">
                            <label class="text-center">From</label>
                            <select class="form-control" name="from">
                                <?php 
                            foreach ($this->place as $places){?>
                                <option><?php echo $places[1];?></option>
                           <?php }?>
                            </select>
                    </div>
                   
                    <div class="col-md-3">
                        <label class="text-center">To</label>
                         
                        <select class="form-control" name="to">
                            <?php 
                            foreach ($this->place as $places){?>
                                <option><?php echo $places[1];?></option>
                           <?php }?>
                            
<!--                            <option>Chitwan</option>
                            <option>Lumbini</option>
                            <option>Mustang</option>-->
                        </select>
                         
                    </div>
                       
                    <div class="col-md-2">
                        <button class="btn btn-info btn-block" type="submit" name="search">Search</button>
                    </div>
                </form><!--end of form-->


            </div>
        </aside>
        <!--end of trip form--> 
        <!--services-->
        <section class="parallex">
            <div class="parallex-inner">
                <h3>Take a look at <strong>our services</strong>
                    <div class="line">
                        <hr>
                    </div>
                </h3>
                <div id="tf-services" class="text-center">
                    <div class="space"></div>
                    <div class="col-md-12">
                        <div class="col-md-3 col-sm-6 service"> <i class="fa fa-building-o"></i>
                            <h4><strong>Accomodation</strong></h4>
                            <p>We provide the best accomodations for you.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 service"> <i class="fa  fa-bus"></i>
                            <h4><strong>Transportation</strong></h4>
                            <p>We will provide you with a good transportation facility to your destinations.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 service"> <i class="fa fa-star-o"></i>
                            <h4><strong>Easy trip planning</strong></h4>
                            <p>Through our website, you can easily choose your  holiday destinations.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 service"> <i class="fa fa-desktop"></i>
                            <h4><strong>Booking</strong></h4>
                            <p>You can book hotels and transportation of your choice.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end of services--> 
        <!--start of about page-->
        <section id="about" class="section">


            <div class="section-inner">
                <div class="col-md-12">
                    <h1 class="text-center">ABOUT US</h1>
                    <div class="col-md-6">

                        <p>We are recognized and established brand for excellent tour and travel services at very reasonable prices. We have always dedicated ourselves towards warm hospitality and quality services to our guests. Our success stories consist of not only hard work of our team members but also the drive of confidence and professionalism toward satisfaction of the guests. We try our best to understand your requirements, help you choose the right trip and try to cater exactly what you are looking for. Apart from our activities in our web, we would also offer you the customized tours and treks as per your interest, time, and budgets. All fixed departures are guaranteed. We very humbly request you, please do not hesitate to write us for more information and further details for your trip to Nepal. Thanks and wishing you all the best for your memorable and safe journey to this exotic land. </p>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img src="<?php echo URL; ?>public/img/rafting.png" class="img-circle" id="png1"></a>
                        <a href="#"><img src="public/img/climbing.png" class="img-circle" id="png"></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <a href="#"><h2 class="text-center">Why Travel With Us?</h2></a>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!--end of about page--> 
        <!--start of top tours-->
        <main id="main" class="site-main">
            <hr>
            <div class="col-md-12 text-center">
                <h1>TOP SEARCHED DESTINATIONS</h1>
            </div>
            <div class="container-fluid">
                <?php foreach ($this->destination as $destinations) { ?>
<!--                    <a href="<?php echo URL . "/search?search=&to=" . $destinations[1] ?>" >      -->
                        <div class="col-md-4 overlay-holder"><img src="<?php echo URL . $destinations[3] ?>">
                            <div class="overlay">
                                <div class="text">
                                    <h1><?php echo $destinations[1]; ?></h1> 

                                </div>
                            </div>
                        </div>
                    <!--</a>-->
                <?php } ?>
            </div>
        </main>
        <!--end of top tours--> 
        <!--start of contact-->

<!--        <div id="contactus" class="parallex-contact">
            <div class="parallex-contact-inner">
                end of col-md-5

                <div class="col-md-4 pull-right">
                    <h1 class="text-center">Get In Touch</h1>
                    <form method="post" action="#">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" placeholder="name" class="form-control" name="name" required>
                            <label>Email</label>
                            <input type="text" placeholder="email" class="form-control" name="email" required>
                            <label>Message</label>
                            <textarea type="text" class="form-control" name="message" rows="5"></textarea><br>
                            <button type="submit" class="btn btn-block btn-success" name="submit1">SUBMIT</button>
                            <?php
//                            if (isset($_POST['submit1'])) {
//
//
//                                echo "<script>alert('" . $this->msg . "'); </script>";
//                            }
                            ?>   
                        </div>
                    </form>

                </div>


            </div>end of parallex-inner
        </div>end of parallex contact-->

        <div id="contactus" class="site-footer">

            <div class="col-md-12 text-center">
                <h2>Get Connected</h2>
                <a href="#"><i class="fa fa-facebook-f"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>



            <div class="col-md-12 text-center">
                <h2>Contact Us</h2>
                <p>Post Box: 10988 | Chaksibari Marg, Thamel, Kathmandu, Nepal | Tel: +977 1 4253029 | Mobile: +977 9841697870 | Email: GantabyaT&T@gmail.com</p>
            </div>
        </div><!--end of site-footer-->
        <button class="site-buttom">

            <div class="col-md-12 text-center">
                <p>&copy; Gantabya Tours & Travel Pvt.Ltd. | All Rights Reserved</p>
                <p>All contents and photographs within this website is © by Gantabya Tours & Travel and may not be reproduced without our permission.</p>
            </div>
        </button>




    </body>
    <script src="<?php echo URL; ?>public/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
</html>

