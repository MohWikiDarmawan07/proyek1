<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function testimonial() {
        return view('testimonials');
    }
    public function doctor() {
        return view('doctor');
    }
    public function service() {
        return view('layouts.service');
    }
    public function Bookingsucces() {
        return view('Bookingsucces');
    }
    public function book() {
        return view('layouts.book');
    }
    public function contact() {
        return view('contact');
    }
    //public function 
}