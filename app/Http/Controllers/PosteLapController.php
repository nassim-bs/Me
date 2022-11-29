<?php

namespace App\Http\Controllers;

use App\Models\LogUsMod;
use App\Models\PosteLap;

use Illuminate\Http\Request;

class PosteLapController extends Controller
{
    public function index()
    {
        $PosteLap = PosteLap::all();
        return view('BackLab.Admin', compact('PosteLap'));
    }

    public function create()
    {
        return view('BackLab.index');
    }

    public function store(Request $request)
    {
        $PosteLap = new PosteLap;

        $PosteLap->Name = $request->input('txtName');
        $PosteLap->DevPost = $request->input('pst');
        $PosteLap->Description = $request->input('txtMsg');
        $PosteLap->Day_s = $request->input('sdx');
        $PosteLap->Day_f = $request->input('fdx');
                
        $PosteLap->save();
        return redirect('/PosteLaps')->with('status','PosteLap Added Successfully');
    }

    public function edit($id)
    {
        $PosteLap = PosteLap::find($id);
        return view('BackLab.edit', compact('PosteLap'));
    }

    public function update(Request $request, $id)
    {
        $PosteLap = PosteLap::find($id);
        
        $PosteLap->Name = $request->input('txtName');
        $PosteLap->DevPost = $request->input('pst');
        $PosteLap->Description = $request->input('txtMsg');
        $PosteLap->Day_s = $request->input('sdx');
        $PosteLap->Day_f = $request->input('fdx');
        
        $PosteLap->update();
        return redirect('/PosteLaps')->with('status','PosteLap Updated Successfully');

        //return redirect();
    }

    public function destroy($id)
    {
        $PosteLap = PosteLap::find($id);
        $PosteLap->delete();
        return redirect()->back()->with('status','PosteLap Deleted Successfully');
    }
}
