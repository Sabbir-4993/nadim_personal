<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\NewsLetter;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.pages.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();

        NewsLetter::create($data);
        return redirect()->back()->with('message','Message Send Successfully');
    }
}
