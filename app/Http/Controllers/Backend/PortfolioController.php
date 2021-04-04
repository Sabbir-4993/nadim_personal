<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Portfolio;
use App\PortfolioDetails;
use Carbon\Carbon;
use DB;
use File;
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
     * @return \Illuminate\Http\Responsew
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
            'description' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = ($request->category_name). "." . date('Y-m-d') . "." . time() . "." . 'portfolio' . "." . $image->getClientOriginalExtension();
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
        $portfolio = Portfolio::find($id);
        return view('backend.portfolio_edit', compact('portfolio'));
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
            'category_name' => 'required',
            'title' => 'required',
            'date' => 'required',
            'url' => 'required',
            'status' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);


        $portfolio = Portfolio::find($id);

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
            'updated_at' => Carbon::now(),
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
        $portfolio = Portfolio::where('id',$id)->first();

        $image_path = public_path("storage/uploads/portfolios/{$portfolio->image}");

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $portfoliodetails = PortfolioDetails::where('portfolio_id', $portfolio->id)->get();
        foreach ($portfoliodetails as $row) {
            PortfolioDetails::where('portfolio_id', $row->portfolio_id)->delete();

            $portfolio_image_path = public_path("storage/uploads/portfolio-images/{$row->image}");

            if (File::exists($portfolio_image_path)) {
                unlink($portfolio_image_path);
            }
        }

        Portfolio::where('id', $portfolio->id)->delete();

        return redirect()->back()->with('message', 'Portfolio Deleted Successfully');
    }


}
