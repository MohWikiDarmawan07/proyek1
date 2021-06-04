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
            <a class="navbar-brand" href="/"><img src="assets/images/logo.png" alt="image"></a>
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
   </header>

   @yield('content')
   @yield('footer')
   <!-- end section -->
   <br><br><br>
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