<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\PortfolioDetails;
use Illuminate\Http\Request;
use File;
Use Carbon\Carbon;

class PortfolioDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfoliodetails = PortfolioDetails::orderBy('id','desc')->get();
        return view('backend.portfoliodetails',compact('portfoliodetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'portfolio_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = date('Y-m-d'). "." .time(). "." .'portfolio'. "." .$image->getClientOriginalExtension();
            $destination = public_path('/storage/uploads/portfolio-images');
            $image->move($destination, $name);
            $image_url = $name;
        }else{
            $image = 'portfolio-sample.png';
        }

        $data['image'] = $image_url;

        PortfolioDetails::create($data);
        return redirect()->back()->with('message','Portfolio Image Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio_details = PortfolioDetails::find($id);
        return view('backend.portfoliodetails_edit', compact('portfolio_details'));
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
        $this->validate($request,[
            'portfolio_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);


        $portfolio = PortfolioDetails::find($id);

        if($request->image != '') {
            $path = public_path('/storage/uploads/portfolios/');
            //code for remove old file
            if ($portfolio->image != '' && $portfolio->image != null) {
                $file_old = $path . $portfolio->image;
                unlink($file_old);
            }
            //upload new file
            $file = $request->image;
            $filename = ($request->category_name) . "." . date('Y-m-d') . "." . time() . "." . 'portfolio' . "." . $file->getClientOriginalExtension();

            $file->move($path, $filename);
            //for update in table
            $portfolio->update(['image' => $filename]);
        }
        $portfolio->update([
            'category_name' => $request->category_name,
            'title' => $request->title,
            'date' => $request->date,
            'url' => $request->url,
            'status' => $request->status,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.portfolio.index')->with('message','Portfolio Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = PortfolioDetails::findOrFail($id);
        $image_path = public_path("storage/uploads/portfolio-images/{$image->image}");

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $portfoliodetails = PortfolioDetails::find($id);
        $portfoliodetails->delete();
        return redirect()->back()->with('message', 'Portfolio Image Deleted Successfully');
    }
}
