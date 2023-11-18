<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function artists() {
        return view('discover');
    }

    public function features() {
        return view('app-features');
    }
}
