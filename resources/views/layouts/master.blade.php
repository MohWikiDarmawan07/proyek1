<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title> @yield('title')</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="assets/images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="assets/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="assets/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="assets/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="assets/css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="assets/js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->

      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="index.balde.php"><img src="assets/images/logo.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="assets/images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">Life_animal.com</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily: 8:00am - 16:00pm</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="/">Home</a></li>
                        <li><a data-scroll href="/about">About us</a></li>
                        <li><a data-scroll href="/service">Services</a></li>
                        <li><a data-scroll href="/doctors">Doctors</a></li>
                        <li><a data-scroll href="/price">Price</a></li>
						<li><a data-scroll href="/testimonials">Testimonials</a></li>
                        <li><a data-scroll href="/getintouch">Contact</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

@yield('content')
@yield('footer')
    <!-- end section -->
    <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
        <div class="container">
           <div class="heading">
              <span class="icon-logo"><img src="assets/images/icon-logo.png" alt="#"></span>
              <h2>Get in Touch</h2>
           </div>
        </div>
        <div class="contact-section">
           <div class="form-contant">
              <form id="ajax-contact" action="assets/mailer.php" method="post">
                 <div class="row">
                    <div class="col-md-6">
                       <div class="form-group in_name">
                          <input type="text" class="form-control" placeholder="Name" required="required">
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group in_email">
                          <input type="email" class="form-control" placeholder="E-mail" required="required">
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group in_email">
                          <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group in_email">
                          <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group in_message"> 
                          <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                       </div>
                       <div class="actions">
                          <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                       </div>
                    </div>
                 </div>
              </form>
           </div>
           <div id="googleMap" style="width:100%;height:450px;"></div>
        </div>
     </div>
     <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="logo padding">
                    <a href=""><img src="assets/images/logo.png" alt=""></a>
                    <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="footer-info padding">
                    <h3>CONTACT US</h3>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                    <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> (+1) 800 123 456</p>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="subcriber-info">
                    <h3>SUBSCRIBE</h3>
                    <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                    <div class="subcriber-box">
                       <form id="mc-form" class="mc-form">
                          <div class="newsletter-form">
                             <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                             <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                             <div class="clearfix"></div>
                             <!-- mailchimp-alerts Start -->
                             <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div>
                                <!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div>
                                <!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div>
                                <!-- mailchimp-error end -->
                             </div>
                             <!-- mailchimp-alerts end -->
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
     <div class="copyright-area wow fadeIn">
        <div class="container">
           <div class="row">
              <div class="col-md-8">
                 <div class="footer-text">
                    <p>© 2018 Lifecare. All Rights Reserved.</p>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="social">
                    <ul class="social-links">
                       <li><a href=""><i class="fa fa-rss"></i></a></li>
                       <li><a href=""><i class="fa fa-facebook"></i></a></li>
                       <li><a href=""><i class="fa fa-twitter"></i></a></li>
                       <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                       <li><a href=""><i class="fa fa-youtube"></i></a></li>
                       <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end copyrights -->
     <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
     <!-- all js files -->
     <script src="assets/js/all.js"></script>
     <!-- all plugins -->
     <script src="assets/js/custom.js"></script>
     <!-- map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
  </body>
</html>