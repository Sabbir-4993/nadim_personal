<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\PortfolioDetails;
use File;
use Illuminate\Http\Request;

class PortfolioDetailsController extends Controller
{
    public function index(){
        $portfoliodetails = PortfolioDetails::orderBy('id','desc')->get();
        return view('backend.portfoliodetails',compact('portfoliodetails'));
    }
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

    public function destroy($id){

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
