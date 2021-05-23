@extends('layouts.master')
@section('title', 'doctor')
@section('content')
<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">
		
		<div class="heading">
               <span class="icon-logo"><img src="assets/images/icon-logo.png" alt="#"></span>
               <h2>The Specialist Clinic</h2>
            </div>

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="assets/images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>---</h3>
                            <div><h3>08888</h3></div>
                            <small>Clinic Owner</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="assets/images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>---</h3>
                            <div><h3>08888</h3></div>
                            <small>Internal Diseases</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="widget clearfix">
                        <img src="assets/images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>----</h3>
                            <div><h3>08888</h3><div>
                            <small>Orthopedics Expert</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        
                    </div><!--widget -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    @endsection

@section('footer')