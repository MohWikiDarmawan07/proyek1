@extends('layouts.master')
@section('title', 'harga')
@section('content')
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('assets/images/slider-bg.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="text-contant">
                    <h2>
                        <span class="center"><span class="icon"><img src="assets/images/icon-logo.png" alt="#" /></span></span>
                        <a href="assets/css/style.css" class="typewrite" data-period="2000" data-type='[ "Selamat Datang di Klinik Hewan", "Tugas Proyek 1", "Politeknik Negeri Malang" ]'>
                            <span class="wrap"></span>
                        </a>
                    </h2>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<br><br><br><br><br><br><br>
<div id="time-table" class="time-table-section">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
                <div class="service-time" style="background:#0071d1;">
                    <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    <h3>Harga</h3>
                    <div class="time-table-section">
                        <ul>
                            <li><span class="left">penanganan ringan</span><span class="right">50.000-150.000</span></li>
                            <li><span class="left">penanganan operasi</span><span class="right">500.000 – 1000.000</span></li>
                            <li><span class="left">usg kehamilan</span><span class="right">50.000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')