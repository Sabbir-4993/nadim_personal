<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Portfolio;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::orderBy('id','desc')->get();
        return view('backend.portfolio', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.portfolio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            $name = date('Y-m-d'). "." .time(). "." .'portfolio'. "." .$image->getClientOriginalExtension();
            $destination = public_path('/storage/uploads/portfolios');
            $image->move($destination, $name);
            $image_url = $name;
        }else{
            $image = 'portfolio-sample.png';
        }

        $data['image'] = $image_url;

        Portfolio::create($data);
        return redirect()->back()->with('message','Portfolio Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $portfolio = Portfolio::orderBy('id','desc')->get();
//        return view('backend.portfolio', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);

        $portfolio->delete();
        return redirect()->back()->with('message', 'Portfolio Deleted Successfully');
    }

}
