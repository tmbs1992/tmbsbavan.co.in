<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Topbuilder Construction Template</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>India : +918980307872</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>nishadjoshi1998@gmail.com</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
	    </div>
	</section>
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt=""></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                      <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="index.php">Home</a></li>
					   <li><a href="about.php">About Us</a></li>
                     
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu other_dropdwn">
                                <li><a href="services.php">Matrimonial</a></li>
								<li><a href="services-2.php">Astrology</a></li>
								<li><a href="services-2.php">Services</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Gallery</a></li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Membership</a>
                            <ul class="dropdown-menu">
                                <li><a href="Register.php">Registration</a></li>
                                <li><a href="blog-2.php">Events/Registration </a></li>
								<li><a href="blog-2.php">Online Donation</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p> Need additional information or have a question or comment? Please feel free to leave a message, and we'll get back to you as soon as possible.</p>
                    <div class="location">
                        <div class="location_laft">
							<a href="#">Email</a>
                            <a href="#">Phone</a>
                            <a href="#">Fax</a>
							<a class="f_location" href="#">location</a>
                        </div>
                        <div class="address">
							<a href="#">: tmbsbavan@gmail.com , nishadjoshi1998@gmail.com</a>
                            <a href="#">: +918980307872</a>
                            <a href="#">: (000) xxx-xxxx</a>
							<a href="#">: AT & PO : Piludra , Ta : Prantij , Dist: Sabarkantha 383205 <br>  Gujarat , India  </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Send Us a Message</h2>
                    <form method="post" action="./server/touch.php" class="form-inline contact_box">
                        <input type="text" name="first_name" maxlength="50"  pattern="[a-zA-Z]+"  class="form-control input_box" placeholder="First Name *">
                        <input type="text" name="last_name" maxlength="50"   pattern="[a-zA-Z]+"  class="form-control input_box" placeholder="Last Name *">
                        <input type="text" name="email" maxlength="50" size="30" pattern="[^ @]*@[^ @]*" class="form-control input_box" placeholder="Your Email *">
                        <input type="text" name="phone" maxlength="10" size="30" pattern="[0-9]{10}" class="form-control input_box" placeholder="Phone Number">
                        <textarea name="comments" maxlength="1000" cols="25" rows="6" class="form-control input_box" placeholder="Message"></textarea>
                        <button type="submit" value="submit" name="submit" class="btn btn-default">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->
	
	    <!-- Map -->
    <div class="contact_map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7318.811527093629!2d72.85435437435054!3d23.48189003888957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395dc8dc768b28d3%3A0x37fc72c99f53e3e7!2sPiludra%2C%20Gujarat%20383120%2C%20India!5e0!3m2!1sen!2sus!4v1585788742926!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    <!-- End Map -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>ABOUT OUR Community</h2>
                    <img src="images/footer-logo.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul class="socail_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
               <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Quick links</h2>
                    <ul class="quick_link">
                        <li><a href="#"><i class="fa fa-chevron-right"></i>About Us</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Services</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Membership</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Upcoming Events</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Blog</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Feedback</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Community</h2>
					<ul class="quick_link">
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Contact Us</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Privacy Policy</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Terms and Conditions</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Join Our Website</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Testimonials</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                  <address>
                        <p>Have questions, comments Please Contact Me :</p>
                         <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Clientinfo1992@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>USA : +1 (773) 819-5463</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chicago , USA</li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
          <script type="text/javascript">
var now = new Date();
var year = now.getFullYear();
var month = now.getMonth();
var date = now.getDate();
var day = now.getDay();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds();
var analog;
		
if ((hours >0)&& (hours <= 11)){
                analog = "AM";
} else if (hours == 0) {
 hours= 12;
 analog = "AM";
} else if (hours == 12) {
 analog = "PM";
} else {
hours= hours-12;
 analog = "PM";
}
if (day==0)
{
	day="Sunday";
}
else if(day==1)
{
	day="Monday";
	}
	else if(day==2)
{
	day="Tuesday";
	}
	else if(day==3)
{
	day="Wednesday";
	}
	else if(day==4)
{
	day="Thursday";
	}
	else if(day==5)
{
	day="Friday";
	}
	else if(day==6)
{
	day="Saturday";
	}
		
if (month == 0)	
{ month = "January";
}
else if (month == 1)
{
	month = "February"
}
else if (month == 2)
{
	month = "March"
}
else if (month == 3)
{
	month = "April"
}
else if (month == 4)
{
	month = "May"
}
else if (month == 5)
{
	month = "Jun"
}
else if (month == 6)
{
	month = "July"
}
else if (month == 7)
{
	month = "August"
}
else if (month == 8)
{
	month = "September"
}
else if (month == 9)
{
	month = "Octomber"
}
else if (month == 10)
{
	month = "November"
}
else if (month == 11)
{
	month = "December"
}
document.write(" Copyright 2020 Tmbsbavan Designed by Vishal Joshi. All rights reserved. " +day + ", " + date + " " + (month) + ", " + year + " " + hours + ":" + minutes + " " + analog);
</script>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="vendors/map/topbuilder_map.min.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
