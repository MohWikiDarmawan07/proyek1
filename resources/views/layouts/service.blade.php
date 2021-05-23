@extends('layouts.master')
@section('title', 'Home')
@section('content')
<br><br><br>
<div id="service" class="services wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="inner-services">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="assets/images/service-icon1.png" alt="#" /></span>
                            <h4>PREMIUM FACILITIES</h4>
                            <p>Fasilitas Pada Laboratorium Lengkap.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="assets/images/service-icon2.png" alt="#" /></span>
                            <h4>LARGE LABORATORY</h4>
                            <p>Laboratorium cukup luas bisa menanggung hewan kecil maupun besar.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="assets/images/service-icon3.png" alt="#" /></span>
                            <h4>DETAILED SPECIALIST</h4>
                            <p>specialist yg detail terhadap pekerjaan apa, serta bersertifikat.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="assets/images/service-icon4.png" alt="#" /></span>
                            <h4>Animal CARE CENTER</h4>
                            <p>Tempat penitipan hewan yg cukup bila hewan dirawat inap.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="assets/images/service-icon5.png" alt="#" /></span>
                            <h4>FINE INFRASTRUCTURE</h4>
                            <p>obat yg cukup lengkap pada perawatan beberapa hewan</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="assets/images/service-icon6.png" alt="#" /></span>
                            <h4>ANYTIME BLOOD BANK</h4>
                            <p>penyimpanan darah cukup banyak sehingga bisa digunakan kapan saja</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="hr1">
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="service-widget">
            <div class="post-media wow fadeIn">
                <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                <img src="assets/images/clinic_01.jpg" alt="" class="img-responsive">
            </div>
            <h3>Pemeriksaan cepat</h3>
        </div>
        <!-- end service -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="service-widget">
            <div class="post-media wow fadeIn">
                <a href="assets/images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                <img src="assets/images/clinic_02.jpg" alt="" class="img-responsive">
            </div>
            <h3>Ruang Operasi yg aman dan bersih</h3>
        </div>
        <!-- end service -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="service-widget">
            <div class="post-media wow fadeIn">
                <a href="assets/images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                <img src="assets/images/clinic_03.jpg" alt="" class="img-responsive">
            </div>
            <h3>Specialist Kehamilan Hewan</h3>
        </div>
        <!-- end service -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="service-widget">
            <div class="post-media wow fadeIn">
                <a href="assets/images/clinic_04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                <img src="assets/images/clinic_04.jpg" alt="" class="img-responsive">
            </div>
            <h3>Bedah Hewan</h3>
        </div>
        <!-- end service -->
    </div>
</div>
@endsection

@section('footer')