<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about-us');
    }

    public function contact() {
        return view('contact-us');
    }

    public function pricing() {
        return view('pricing');
    }
}
