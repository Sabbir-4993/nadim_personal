<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioDetails;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('frontend.pages.index', compact('portfolios'));
    }

    public function about(){

        return view('frontend.pages.about');
    }


    public function portfolio(){

        return view('frontend.pages.portfolio');
    }

    public function portfoliodetails(){
        $portfoliodetails = PortfolioDetails::all();
        return view('frontend.pages.portfolio_details',compact('portfoliodetails'));
    }

    public function blog(){

        return view('frontend.pages.blog');
    }

    public function blogdetails(){

        return view('frontend.pages.blog_details');
    }
}
