@extends('layouts.master')
@section('title', 'Home')
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
      <!-- end section -->
      <div id="time-table" class="time-table-section">
         <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#2895f1;">
                     <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                     <h3>Emergency </h3>
                     <p>Penanganan Keadaan Darurat yang Diperlukan Untuk Hewan.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">
                     <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 
                     <h3>Jam kerja</h3>
                     <div class="time-table-section">
                        <ul>
                           <li><span class="left">Senin - kamis</span><span class="right">8.00 – 18.00</span></li>
                           <li><span class="left">Jumat</span><span class="right">13.00 – 18.00</span></li>
                           <li><span class="left">Sabtu</span><span class="right">8.00 – 16.00</span></li>
                           <li><span class="left">Minggu</span><span class="right">8.00 – 13.00</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time three" style="background:#0060b1;">
                     <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                     <h3>Clinic House</h3>
                     <p>kenyamanan Tempat untuk Perawatan Hewan.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="assets/images/icon-logo.png" alt="#"></span>
               <h2>spesialis klinik hewan</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>Apa yang kami Lakukan?</h4>
                     <h2>Dokter Hewan</h2>
                     <p class="lead">Dokter hewan bertugas mencegah, memeriksa, mengobati, dan melakukan perawatan pada hewan dari penyakit. Jenis hewan yang ditangani bisa hewan besar (sapi, kuda, kambing, kerbau, babi), hewan kecil (anjing, kucing), unggas (ayam, itik, angsa, puyuh), hewan eksotik (ular, hamster, kura-kura, iguana), satwa liar (reptil, primata), satwa harapan (rusa, kelinci), satwa akuatik (ikan), ataupun hewan laboratorium (rodensia). Kalau ada hewan yang terluka, mengalami patah tulang, maka dokter hewan akan melakukan operasi.</p>
                     
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="assets/images/about_03.jpg" alt="" class="img-responsive">
                     
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
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
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
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
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span> Book Appointment</h3>
                     <div class="form">
                        <form action="index.html">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" placeholder="Your Name"  />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="email" placeholder="Email Address" id="email" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Day</option>
                                          <option>Sunday</option>
                                          <option>Monday</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Time</option>
                                          <option>AM</option>
                                          <option>PM</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Doctor Name</option>
                                          <option>Mr.XYZ</option>
                                          <option>Mr.ABC</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit">Submit</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
	  
	  <!-- doctor -->
	  
	  
	  
	  
	  
	  <!-- end doctor section -->
	  
      
  
@endsection

@section('footer')