<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Team;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::orderBy('id','desc')->get();
        return view('backend.team', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = date('Y-m-d'). "." .time(). "." .'team'. "." .$image->getClientOriginalExtension();
            $destination = public_path('/storage/uploads/team');
            $image->move($destination, $name);
            $image_url = $name;
        }else{
            $image = 'team-sample.png';
        }

        $data['image'] = $image_url;

        Team::create($data);
        return redirect()->back()->with('message','Team Added Successfully');
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
        $team_member = Team::find($id);
        return view('backend.team_edit', compact('team_member'));
    }

    /**
     *
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
            'image' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);


        $team_member = Team::find($id);

        if($request->image != '') {
            $path = public_path('/storage/uploads/team/');
            //code for remove old file
            if ($team_member->image != '' && $team_member->image != null) {
                $file_old = $path . $team_member->image;
                unlink($file_old);
            }
            //upload new file
            $file = $request->image;
            $filename = ($request->name) . "." . date('Y-m-d') . "." . 'team' . "." . $file->getClientOriginalExtension();

            $file->move($path, $filename);
            //for update in table
            $team_member->update(['image' => $filename]);
        }
        $team_member->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.team.index')->with('message','Team Member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Team::findOrFail($id);
        $image_path = public_path("/storage/uploads/team/{$image->image}");

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $team = Team::find($id);

        $team->delete();
        return redirect()->back()->with('message', 'Team Member Deleted Successfully');
    }
}
