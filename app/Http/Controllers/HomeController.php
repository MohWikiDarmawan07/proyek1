<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function testimonial() {
        return view('testimonials');
    }
    public function doctor() {
        return view('doctor');
    }
}