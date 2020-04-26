<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                                <li><a href="#">Matrimonial</a></li>
								<li><a href="#">Newsletter</a></li>
								<li><a href="#">Services</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Membership</a>
                            <ul class="dropdown-menu">
                                <li><a href="Register.php">Registration</a></li>
                                <li><a href="#">Events</a></li>
								<li><a href="#">Online Donation</a></li>
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

    <!-- blog area -->
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
				<h2 style="color:red"  align="center">Membership</h2>
					<div class="table">
					<!-- Form---->		
						<form method="post" action="./server/process.php" >
    <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="first_name" placeholder="John" maxlength="50" size="30" pattern="[a-zA-Z]+" title="First Name should only contain letters."required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="last_name" placeholder="kenny" maxlength="50" size="30" pattern="[a-zA-Z]+" title="last Name should only contain letters." required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="Brahmin">Brahmin</label>
    </div>
    <div class="col-75">
      <select id="Brahmin" name="Brahmin" required>
              <option selected>Gujrati Brahmins</option>
              <option>Gaur Brahmins</option>
              <option>Rajasthani Brahmins</option>
              <option>Saraswat Brahmins</option>
              <option>Sanadhya Brahmins</option>
              <option>Saryuparin Brahmins</option>
              <option>Vyas Brahmins</option>
              <option>Bhatt Mevada</option>
              <option>TRIPATHI</option>
              <option>Tiwari</option>
              <option>JOSHI</option>
              <option>shukla</option>
              <option>Mewar Brahmin</option>
              <option>Chaturvedi</option>
              <option>Pandya</option>
              <option>Mehta</option>
              <option>Other's </option>
      </select>
    </div>
  </div> 
    <div class="row">
    <div class="col-25">
      <label for="Gothra ">Gothra</label>
    </div>
    <div class="col-75">
      <select id="Gothra" name="Gothra" required>
<option selected>Agastya</option>
              <option>Atreyasa / Atri</option>
              <option>Alambani</option>
              <option>Angad</option>
              <option>Angirasa</option>
              <option>Ahabhunasa</option>
              <option>Aupamanyava</option>
              <option>Babhravya</option>
              <option>Bharadwaj</option>
              <option>Bhargava</option>
              <option>Bhakdi</option>
              <option>Bhaskara</option>
              <option>Chandilya</option>
              <option>Charora</option>
              <option>Chikitasa</option>
              <option>Chyavana</option>
              <option>Dalabhya</option>
              <option>Darbhas</option>
              <option>Dev</option>
              <option>Dhananjaya</option>
              <option>Dhanvantari</option>
              <option>Galvasaya</option>
              <option>Garga</option>
              <option>Gautamasa</option>
              <option>Gaubhilya</option>
              <option>Ghrit kaushika</option>
              <option>Harita/ Haritasa</option>
              <option>Hukman Bhal</option>
              <option>Jamadagni</option>
              <option>Jatukarna</option>
              <option>Kalabodhana</option>
              <option>Kamakayana Vishwamitra</option>
              <option>Kanva</option>
              <option>Kaushikasa</option>
              <option>Kapi</option>
              <option>Kapil</option>
              <option>Kapinjala</option>
              <option>Karmani</option>
              <option>Kashyapasa</option>
              <option>Kaundinyasa</option>
              <option>Kaunsh</option>
              <option>Kaushal</option>
              <option>Kaushik</option>
              <option>Kaustubha</option>
              <option>Kausyagasa</option>
              <option>Kavist</option>
              <option>Katyayana</option>
              <option>Krishnatriya</option>
              <option>Kundina Gowtama</option>
              <option>Kusha</option>
              <option>Kutsa</option>
              <option>Kutsasa</option>
              <option>Lakhi</option>
              <option>Lohit</option>
              <option>Lohita-Kowsika</option>
              <option>Lomasha</option>
              <option>Mandavya</option>
              <option>Marichi</option>
              <option>Markandeya</option>
              <option>Mauna Bhargava</option>
              <option>Matanga</option>
              <option>Maudgalya Moudgalya</option>
              <option>Maudgalya Moudgalya</option>
              <option>Mudgala </option>
              <option>Mudgal</option>
              <option>Mihirayan</option>
              <option>Naidhruva</option>
              <option>Nithunthana</option>
              <option>Nydravakashyapa</option>
              <option>Nrisimhadevara</option>
              <option>Parashara</option>
              <option>Parthivasa</option>
              <option>Pouragutsya</option>
              <option>Punagashella</option>
              <option>Ratheetarasa</option>
              <option>Purang</option>
              <option>Pradnya</option>
              <option>Rathitara</option>
              <option>Rohinya</option>
              <option>Rauksaayana</option>
              <option>Saminathen</option>
              <option>Sanatana</option>
              <option>Salankayana</option>
              <option>Sangar</option>
              <option>Sanaka</option>
              <option>Sanaga</option>
              <option>Sanjaya</option>
              <option>Sankhyayana</option>
              <option>Sankrithi</option>
              <option>Sankyanasa</option>
              <option>Sathamarshana</option>
              <option>Shandilya , sanas</option>
              <option>Sandilyasa</option>
              <option>Shandelosya</option>
              <option>Saawarna</option>
              <option>Saharia Joshi</option>
              <option>Sauparna</option>
              <option>Savaran</option>
              <option>Savita</option>
              <option>Somnasser</option>
              <option>Pratanansya</option>
              <option>Saankritya</option>
              <option>Soral</option>
              <option>Srivatsa</option>
              <option>Sumarkanth</option>
              <option>Suryadhwaja</option>
              <option>Shaktri</option>
              <option>Shaunaka</option>
              <option>Sravanvaitas</option>
              <option>Surya</option>
              <option>Swatantra Kabisa</option>
              <option>Tugnait</option>
              <option>Roushayadana</option>
              <option>Upadhyay</option>
              <option>Upmanyu</option>
              <option>Upreti</option>
              <option>Vadula</option>
              <option>Valmiki</option>
              <option>Vardhviyasa</option>
              <option>Vardhulasa</option>
              <option>Vashishta</option>
              <option>Vatsa</option>
              <option>Vatsyayan</option>
              <option>Veetahavya</option>
              <option>Vishnu</option>
              <option>Vishnuvardhana</option>
              <option>Vishnuvruddha</option>
              <option>Valmiki</option>
              <option>Vishvagni</option>
              <option>Yaska</option>
              <option>Vaidya/Baidya</option>
              <option>Vartantu</option>
              <option>Vishwagni</option>
              <option>Utsasya</option>
              <option>Suparna</option>
              <option>Shiva</option>
              <option>kuvera</option>
              <option>Other's</option> </select>
			</div>
			</div>
    <div class="row">
    <div class="col-25">
      <label for="Gender">Gender</label>
    </div>
    <div class="col-75">
      <select id="Gender" name="Gender" required>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="bday">Birthdate</label>
    </div>
    <div class="col-75">
      <input type="text" id="bday" name="Birth_date" required pattern="\d{4}-\d{2}-\d{2}" placeholder="YYYY-MM-DD" title="Birthdate should only contain only number.">
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Kenny@gmail.com" maxlength="50" size="30" pattern="[^ @]*@[^ @]*" title="Please include an'@' in the email address" required>
    </div>
  </div>
      <div class="row">
    <div class="col-25">
      <label for="Phone">Password</label>
    </div>
    <div class="col-75">
      <input type="text" id="password" name="password" placeholder="Use one number,one uppercase and lowercase letter, and at least 8 or more characters" title="Use one number,one uppercase and lowercase letter, and at least 8 or more characters" maxlength="12" size="30" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="Phone">Phone</label>
    </div>
    <div class="col-75">
      <input type="text" id="Phone" name="Phone" placeholder="Your Phone Number.." title="Phone Number should only contain Number." maxlength="10" size="30" pattern="[0-9]{10}" required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="Village">Village</label>
    </div>
    <div class="col-75">
      <input type="text" id="Village" name="Village" placeholder="Your Village name.." maxlength="50" size="30" pattern="[a-zA-Z]+" title="Village Name should only contain letters." required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="City">City</label>
    </div>
    <div class="col-75">
      <input type="text" id="City" name="City" placeholder="Your City name.." maxlength="50" size="30" pattern="[a-zA-Z]+"  title="City Name should only contain letters." required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="State">State</label>
    </div>
    <div class="col-75">
      <input type="text" id="State" name="State" placeholder="Your State name.." maxlength="50" size="30" pattern="[a-zA-Z]+" title="State Name should only contain letters." required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="pin">Pin Code</label>
    </div>
    <div class="col-75">
      <input type="text" id="PinCode" name="PinCode" placeholder="Your Pin code.." maxlength="06" size="30" pattern="[0-9]{06}" title="postal code should only contain only number. e.g 123456" required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
    </div>
	<div class="row" align="center">&nbsp;
	<p><input type="checkbox" required name="terms"> I accept the <a href="term.php"> Terms and Conditions</a>.*</p>
	</div>&nbsp;
  </div>
    <div class="row" align="center">
    <input type="submit"name="submit" value="Submit">
    <input type="reset" value="Clear">
  </div>
  </form>
  <!-- Form End ---->
</div>	
<!---comment area--->
</div><br/>
					

                <div class="col-sm-4 widget_area">
                    <div class="resent">
                        <h3>RECENT POSTS</h3>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html">
                                    <img class="media-object" src="images/blog/rs1.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">CDC Launches New Weekly COVID-19 Surveillance Report.</a>
                                <h6>April 05, 2020</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html">
                                    <img class="media-object" src="images/blog/rs2.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">The best way to prevent illness is to avoid being exposed to this virus.</a>
                                <h6>April 03, 2020</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html">
                                    <img class="media-object" src="images/blog/rs3.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Avoid touching your eyes, nose, and mouth with unwashed hands.</a>
                                <h6>March 26, 2020</h6>
                            </div>
                        </div>
                    </div>
                    <div class="resent">
                        <h3>CATEGORIES</h3>
                        <ul class="architecture">
                            <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/index.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Symptoms & Testing</a></li>
                            <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/index.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Prevent Getting Sick</a></li>
                            <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/daily-life-coping/index.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Daily Life and Coping</a></li>
                            <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/cases-updates/index.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cases & Latest Updates</a></li>
                        </ul>
                    </div>
                    <div class="resent">
                        <h3>ARCHIVES</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>April 2020</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>February 2020</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>June 2019</a></li>
                        </ul>
                    </div>
                    <div class="search">
                        <input type="search" name="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="resent">
                        <h3>Tag</h3>
                        <ul class="tag">
                            <li><a href="#">Latest updates</a></li>
                            <li><a href="#">Coronavirus</a></li>
                            <li><a href="#">Symptoms</a></li>
                            <li><a href="#">Covid-19 Cases </a></li>
                            <li><a href="#">Daily Life</a></li>  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                     <h2>ABOUT OUR Community</h2>
                    <img src="images/footer-logo.png" alt="">
                    <p>To Promote and Preserve Our Cuiture, Heritage,Language, Social and Cultural Awareness By
Providing a Digital Platform to Our tmbsbavan community.</p>
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
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
	<!-- Sweet alert JS -->

</body>
</html>
