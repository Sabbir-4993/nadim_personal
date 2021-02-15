<?php

namespace App\Http\Controllers\Frontend;

use App\Career;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        return view('frontend.pages.career');
    }

    public function job(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'image' => "required|mimes:pdf|max:10000",
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $request->name. "." .$request->email. "." .date('Y-m-d'). "." .time(). "." .'cv'. "." .$image->getClientOriginalExtension();
            $destination = public_path('/storage/uploads/CV');
            $image->move($destination, $name);
            $image_url = $name;
        }else{
            $image = 'sample.pdf';
        }

        $data['image'] = $image_url;

        Career::create($data);
        return redirect()->back()->with('message','CV Submitted Successfully');
    }
}
