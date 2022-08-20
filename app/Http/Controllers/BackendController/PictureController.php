<?php

namespace App\Http\Controllers\BackendController;

use App\Models\Picture;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $picture = Picture::all();
        return view('backend.picture.index', compact('picture'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.picture.index');
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
            'app' => 'required',
            'photo' => "required|mimes:png,jpg,gif,jpeg,webp|max:1024",
        ]);
        $photo = $request->file('photo');
        $photo_name = Str::slug($request->name)."_".time(). ".".$photo->getClientOriginalExtension();
        $upload = $photo->move(public_path("/storage/picture/"),$photo_name);
        if($upload){
            $insert = new Picture();
            $insert->name = $request->name;
            $insert->app = $request->app;
            $insert->photo = $photo_name;
            $insert->save();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();
        $picture->save();
        return back();
    }
}
