<?php

namespace App\Http\Controllers\Backend;

use App\Contact;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::orderBy('id','desc')->get();
        return view('backend.contact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contact');
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
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'behance' => 'required',
            'fiverr' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = 'logo'. "." .$image->getClientOriginalExtension();
            $destination = public_path('/storage/uploads/Logo');
            $image->move($destination, $name);
            $image_url = $name;
        }else{
            $image = 'logo.png';
        }

        $data['image'] = $image_url;

        Contact::create($data);
        return redirect()->back()->with('message','Contact Added Successfully');
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
        $contact_edit = Contact::find($id);
        return view('backend.contact_edit', compact('contact_edit'));
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
            'email' => '',
            'phone' => '',
            'address' => '',
            'facebook' => '',
            'instagram' => '',
            'behance' => '',
            'fiverr' => '',
            'image' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);


        $contact_edit = Contact::find($id);

        if($request->image != '') {
            $path = public_path('/storage/uploads/Logo/');
            //code for remove old file
            if ($contact_edit->image != '' && $contact_edit->image != null) {
                $file_old = $path . $contact_edit->image;
                unlink($file_old);
            }
            //upload new file
            $file = $request->image;
            $filename = 'Logo' . "." . $file->getClientOriginalExtension();

            $file->move($path, $filename);
            //for update in table
            $contact_edit->update(['image' => $filename]);
        }
        $contact_edit->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'behance' => $request->behance,
            'fiverr' => $request->fiverr,

            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.contact.index')->with('message', 'Contact Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Contact::findOrFail($id);
        $image_path = public_path("storage/uploads/Logo/{$image->image}");

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('message','Contact Deleted Successfully');
    }
}
