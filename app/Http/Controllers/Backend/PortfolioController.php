<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::orderBy('id','desc')->get();
        return view('backend.portfolio', compact('portfolios'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name' => 'required',
            'title' => 'required',
            'date' => 'required',
            'url' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = date('Y-m-d'). "." .time(). "." .'project'. "." .$image->getClientOriginalExtension();
            $destination = storage_path('uploads/portfolios');
            $image->move($destination, $name);
            $image_url = $name;
        }else{
            $image = 'uploads/portfolios/portfolio-sample.png';
        }

        $data['image'] = $image_url;

        Portfolio::create($data);
//        dd($data);

        return back()->with('message','Portfolio Added Successfully');
    }
}

