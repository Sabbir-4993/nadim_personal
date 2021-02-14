<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function about(){
        return view('frontend.pages.about');
    }


    public function portfolio(){
        return view('frontend.pages.portfolio');
    }

    public function portfoliodetails(){
        return view('frontend.pages.portfolio_details');
    }

    public function blog(){
        return view('frontend.pages.blog');
    }

    public function blogdetails(){
        return view('frontend.pages.blog_details');
    }
}
