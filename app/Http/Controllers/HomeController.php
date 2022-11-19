<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('frontEnd.home.home');
    }

    public function blogPage() {
        return view('frontEnd.home.blog');
    }

    public function blogDetails() {
        return view('frontEnd.home.blog-details');
    }
}
