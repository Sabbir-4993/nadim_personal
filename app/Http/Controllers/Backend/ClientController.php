<?php

namespace App\Http\Controllers\Backend;

use App\Client;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::orderBy('id','desc')->get();
        return view('backend.client', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.client');
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
            'url' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = ($request->name). "." .date('Y-m-d'). "." .time(). "." .'client'. "." .$image->getClientOriginalExtension();
            $destination = public_path('/storage/uploads/client');
            $image->move($destination, $name);
            $image_url = $name;
        }else{
            $image = 'team-sample.png';
        }

        $data['image'] = $image_url;

        Client::create($data);
        return redirect()->back()->with('message','Client Added Successfully');
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
        $client_details = Client::find($id);
        return view('backend.client_edit', compact('client_details'));
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
            'url' => '',
            'image' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);


        $client_details = Client::find($id);

        if($request->image != '') {
            $path = public_path('/storage/uploads/client/');
            //code for remove old file
            if ($client_details->image != '' && $client_details->image != null) {
                $file_old = $path . $client_details->image;
                unlink($file_old);
            }
            //upload new file
            $file = $request->image;
            $filename = ($request->name) . "." . date('Y-m-d') . "." . 'client' . "." . $file->getClientOriginalExtension();

            $file->move($path, $filename);
            //for update in table
            $client_details->update(['image' => $filename]);
        }
        $client_details->update([
            'name' => $request->name,
            'url' => $request->url,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.client.index')->with('message','Client Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $image = Client::findOrFail($id);
        $image_path = public_path("storage/uploads/client/{$image->image}");

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $team = Client::find($id);
        $team->delete();
        return redirect()->back()->with('message', 'Client Deleted Successfully');
    }
}
