<?php

namespace App\Http\Controllers\Backend;

use App\Feedback;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::orderBy('id','desc')->get();
        return view('backend.feedback', compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.feedback');
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
            'name' => 'required',
            'designation' => 'required',
            'company' => 'required',
            'feedback' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = date('Y-m-d'). "." .time(). "." .'client'. "." .$image->getClientOriginalExtension();
            $destination = public_path('/storage/uploads/feedback');
            $image->move($destination, $name);
            $image_url = $name;
        }else{
            $image = 'team-sample.png';
        }

        $data['image'] = $image_url;

        Feedback::create($data);
        return redirect()->back()->with('message','Feedback Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback_details = Feedback::find($id);
        return view('backend.feedback_edit', compact('feedback_details'));
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
            'name' => '',
            'designation' => '',
            'company' => '',
            'feedback' => '',
            'image' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);


        $feedback_details = Feedback::find($id);

        if($request->image != '') {
            $path = public_path('/storage/uploads/feedback/');
            //code for remove old file
            if ($feedback_details->image != '' && $feedback_details->image != null) {
                $file_old = $path . $feedback_details->image;
                unlink($file_old);
            }
            //upload new file
            $file = $request->image;
            $filename = ($request->name) . "." . date('Y-m-d') . "." . 'feedback' . "." . $file->getClientOriginalExtension();

            $file->move($path, $filename);
            //for update in table
            $feedback_details->update(['image' => $filename]);
        }
        $feedback_details->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'company' => $request->company,
            'feedback' => $request->feedback,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.feedback.index')->with('message','Feedback Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Feedback::find($id);
        $team->delete();
        return redirect()->back()->with('message', 'Feedback Deleted Successfully');
    }
}
