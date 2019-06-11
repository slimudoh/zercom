<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="elearning company Nigeria, e-learning company Nigeria, omnidocs Nigeria, document management, elearning content development, content design Nigeria, elearning development Nigeria, course conversion, electronic learning, custom e-learning web application, mobile apps, mobile application Nigeria, e-learning development company Nigeria, lms Nigeria, Learning Management System in Nigeria, lms Africa, Learning Management in Africa, e-learning Africa, mobile-app development company, mobile app development company Africa, mobile app Nigeria, android application development, course development in Nigeria, cbt training, computer based training in Nigeria, manual development in Nigeria, manual developer in Nigeria, electronic management system in Nigeria, EMS Nigeria,  digital learning company Nigeria, document digitization, DMS, LMS, document scanning, document archiving, file storage system, computer based training, digital training
" />
<meta property="og:title" content="Elearning | Mobile, Android, ios, cbt | Omnidocs, Omniscan, Course, Lecture" />
<meta name="author" content="Onyekachi 'Ofoegbu' Goodnews" />
<meta property="og:description" content="Zercom Systems is the #1 eLearning, M-Learning, Mobile App, and Document Digitization specialist Company in Nigeria, West Africa. We offer a wide range of digital knowledge-sharing and productivity tools to corporate institutions across West Africa.
" />
<title>Zercoms Systems Nigeria | Elearning | Mobile, Android, ios, cbt | Omnidocs, Omniscan, Course Development, Lecture</title>
<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
<link href="assets/css/mystyle.css" type="text/css" rel="stylesheet" />
<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="assets/css/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<!------Logo Slider-------->
<link href="assets/css/owl.carousel.css" type="text/css" rel="stylesheet" />
<link href="assets/css/owl.theme.css" type="text/css" rel="stylesheet" />
</head>

<body>
	
    <div class="container-fluid contactus">
    	<div class="container">
    	<div class="myMenu">
        	<div class="row">
                <div class="col-md-3">
                	<div class="logo">
                    	<a href="index.html">
                		<img src="assets/img/zercom_lgo.png" class="img-responsive" alt="LMS" />
                        </a>
                    </div>
                </div> 
                <div class="col-md-9">          
                  <nav id="mainNav" class="navbar navbar-default">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                    
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                <ul class="nav navbar-nav navbar-right" style="margin-top:30px; ">
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="aboutus.html">About</a>
                                                    </li>
                                                    <li class="dropdown" >
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products and Services <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                             <li><a class=" active" href="tangerinelms.html">Tangerine LMS</a></li>
                                                             <li><a href="tangerine-mobile.html">Tangerine Mobile</a></li>
                                                             <li><a href="tangerine-for-small-business.html">Tangerine For Small Business</a></li>
                                                             <li><a href="course-development.html">Course Development</a></li>
                                                             <li><a href="digitizing-documents.html">Digitizing Documents </a></li>
															 <li><a href="curriculum-development.html">Curriculum Development</a></li> 
                                                          </ul>
                                                    </li>
                                                    <li class="dropdown" >
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                      Portfolio <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="clients.html">Clients</a></li>
                                                            <li><a href="testimonial.html">Testimonials</a></li>
                                                            <li><a href="careers.html">Careers</a></li>
                                                            <li><a href="projects.html">Recent Projects</a></li>
															<li><a href="image-gallery.html">Zercom Gallery</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="active">
                                                        <a class="page-scroll" href="contact.php">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.navbar-collapse -->
                                    </nav>            
               </div>
            </div>
        </div>
        	<!--<div class="row">
            	<div class="seperator_top"></div>
            	
                <div class="seperator_bottom"></div>
            </div>-->
        </div>
    </div>
   
    <div class="container-fluid formbg">
    	<div class="container">
           <div class="row">
            <div class="container-fluid myheader">
    		<div class="container">
            	<h1><strong>CONTACT US</strong></h1>
            </div>
    </div>	
        	<div class="col-md-12">  
            	<h3 id="returnMssg" class="text-danger" style="font-size:12px;">
                	<label><?php print (isset($_SESSION['msg']) ? $_SESSION['msg']:'');?></label>
                </h3>              
                		<form name="form1" method="post" id="contactUs" action="response.php">
                             <!-- to showing error message -->
                                    <label for="subscribeEmail" class="error"></label>
                                    
                                <div class="form-group">
                                    <label for="inputText"></label>
                                    <input type="text" class="form-control" 
                                    name="name" placeholder="Enter Your Full Name"  id="name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputText"></label>
                                    <input type="text" class="form-control" 
                                    name="phone" placeholder="Enter Your Phone Number"  id="phone" required="required">
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputEmail"></label>
                                    <input type="email" class="form-control"  
                                    name="email" placeholder="Enter Your Email Address"  id="email" required="required">
                                </div>
                                
                                <div class="form-group">               
                                    <textarea class="form-control"  placeholder="Your Message" 
                                    name="comment" rows="10"  id="comment" required="required"></textarea>
                                </div>
            
                
                                <span><input type="submit" class="btn btn-primary" value="Send" name="submit" id="mailSubmit"></span>
                                <!-- to showing success messages -->
                                <p class="subscription-success"></p>
                       </form>

            </div>
          </div>
        </div>
    </div>
     
    <div class="myfooter">
    	<div class="container">
        	<div class="row">
                <div class="col-lg-4">
                	<h4>OFFICE ADDRESS</h4>
                    <p><span style="color:#c9302c;">Nigeria Office:</span> 3rd Floor, Engineering Building, <br/>1, Engineering Close, NEC Building,Off Idowu Taylor Street,Victoria Island, Lagos, Nigeria.<p>
                    <hr />
                    <p><span style="color:#c9302c;">USA Office:</span> 13210 Arriba Greenfields Drive,Bowie MD 20720</p>
                    <hr />
                    <p><span style="color:#c9302c;">United Kingdom:</span> 42,Robina Road, Broxborne, Hertfordshire. EN10 6GE</p>
                    
                    <p></p>
                     
                </div>
                <div class="col-lg-3 col-xs-offset-1">
                	<h4>PRODUCTS & SERVICES</h4>
                    <ul class="fa-ul">
                       
                       <li><i class="fa fa-leanpub"></i>&nbsp; <a href="tangerinelms.html"> Tangerine LMS</a></li>
                       <li><i class="fa fa-mobile"></i>&nbsp; <a href="tangerine-mobile.html"> Tangerine Moblie</a></li>
                       <li><i class="fa fa-file"></i>&nbsp; <a href="digitizing-documents.html"> Digitizing Documents</a></li>
                       <li><i class="fa fa-home"></i>&nbsp; <a href="tangerine-for-small-business.html"> Tangerine For Small Business</a></li>
                     </ul>
                </div>
                <div class="col-lg-4">
                	<div class="padding-left-30">
                            <h4>CONTACT US</h4>
                            <ul class="fa-ul">
                              <li><i class="fa fa-phone"></i>&nbsp; (+234)-1-013429741</li>
                              <li><i class="fa fa-envelope"></i>&nbsp; <a href="mailto:info@zercomsystems.com"> info@zercomsystems.com</a></li>
                            </ul>
                            <h5>Reach us on our Social Media</h5>
                            <div class="socialshare"> 
                                <a href="https://www.facebook.com/zercomsystems" target="_blank" style="margin: 0;"><i class="fa fa-facebook"></i></a> 
                                <a href="https://www.youtube.com/watch?v=nEYqOa-tcZY" target="_blank"><i class="fa fa-youtube-play"></i></a> 
                                <a href="https://www.linkedin.com/company/zercom-systems" target="_blank"><i class="fa fa-linkedin"></i></a> 
                                <a href="https://www.twitter.com/zercomsystems" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="callto://zercomsystems.skype"><i class="fa fa-skype"></i></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyD2F05rPDrzX5_voW5QjVgEQKiXgxwEMtA"></script>
        <div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">www.themecircle.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(6.433269800000001,3.426499599999943),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.433269800000001, 3.426499599999943)});infowindow = new google.maps.InfoWindow({content:"<b>ZERCOM SYSTEMS</b><br/>3rd Floor, Engineering Building, 1, Engineering Close, NEC Building,Off Idowu Taylor Street,Victoria Island<br/> Lagos, Nigeria" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    </div>
    <div class="copyright">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-4">
                	<p>&copy; 
								<script type="text/javascript">
 					 			document.write(new Date().getFullYear());
								</script>
					 Zercom Systems Nigeria. All Rights Reserved </p>
                </div>
                <div class="col-lg-8">
                	<ul>
                    	<li><a href="aboutus.html">About</a></li>
                        <li><a href="tangerinelms.html">Tangerine LMS</a></li>
						<li><a href="tangerine-mobile.html">Tangerine Mobile</a></li>
                        <li><a href="tangerine-for-small-business.html">Tangerine For Small Business</a></li>
                        <li><a href="tangerine-mobile.html">Mobile Applications </a></li>
                        <li><a href="digitizing-documents.html">Digitizing Documents </a></li>                    
                   </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    
  <a href="http://www.zercomsupport.com" target="_blank"><div class="helpdesk">Support</div></a>    
    
 
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--------Logo Slider js---------->
<script src="assets/js/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>
<!-----Bootstrap Carousel-------->
<script>
	$('.carousel').carousel({
	  interval: 3000
	})
</script>
</body>
<?php 
	unset($_SESSION['msg']);
?>
</html>
