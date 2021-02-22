<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
        $portfolios = Portfolio::orderBy('id','desc')->get();
        return view('frontend.pages.portfolio', compact('portfolios'));
    }

    public function portfoliodetails($id){
        $portfoliodetails = PortfolioDetails::where('portfolio_id', $id)->get();
        $portfolios = Portfolio::where('id', $id)->first();
        return view('frontend.pages.portfolio_details',compact('portfoliodetails','portfolios'));
    }
}
