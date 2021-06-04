@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div id="service" class="services wow fadeIn">
    <div class="container">
        <div class="row">
            <br><br><br>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="appointment-form">
                    <h3><span>+</span> Book Appointment</h3>
                    <div class="form">
                        <form method="post" action="{{ route('crud.store') }}" id="myForm">
                            @csrf
                            <fieldset>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="Nama" name="Nama" placeholder="Your Name" class="form-control" id="Nama" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="Email" placeholder="Email Address" name="Email" id="Email" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                    <div class="row">
                                        <div class="form-group">
                                            <select class="form-control" name="Day" type="Day" id="Day">
                                                <option>Day</option>
                                                <option>Sunday</option>
                                                <option>Monday</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="Time" type="Time" id="Time">
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
                                            <select class="form-control" name="Doctor" type="Doctor" id="Doctor">
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
                                            <textarea rows="4" id="Keterangan" class="form-control" placeholder="Tanggal periksa dan keterangan" name="keterangan" type="Keterangan"></textarea>
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
@endsection

@section('footer')