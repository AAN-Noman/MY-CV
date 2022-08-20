<?php

namespace App\Http\Controllers\BackendController;

use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Home::all();
        $DataTrashed = Home::onlyTrashed()->get();
        return view('backend.home.index', compact('datas', 'DataTrashed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home.create');
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
            'name' => "required",
            'profession' => "required",
            "photo" => "required|mimes:png,jpg,gif,jpeg,webp|max:1024",
            "CoverPhoto" => "required|mimes:png,jpg,gif,jpeg,webp|max:1024"
        ]);
        // return $request;
        $photo = $request->file('photo');
        $CoverPhoto = $request->file('CoverPhoto');

        $photo_name = Str::slug($request->name)."_".time(). ".".$photo->getClientOriginalExtension();
        $uploads_photo = $photo->move(public_path("/storage/home/profile/"),$photo_name);

        $Cphoto_name = Str::slug($request->name)."_".uniqid().".".$CoverPhoto->getClientOriginalExtension();
        $Cuploads_photo = $CoverPhoto->move(public_path("/storage/home/coverPic/"),$Cphoto_name);

            if($uploads_photo and $Cuploads_photo){
            $insert = new Home();
            $insert->name = $request->name;
            $insert->profession = $request->profession;
            $insert->link = $request->link;
            $insert->link2 = $request->link2;
            $insert->link3 = $request->link3;
            $insert->link4 = $request->link4;
            $insert->link5 = $request->link5;
            $insert->photo = $photo_name;
            $insert->CoverPhoto = $Cphoto_name;
            $insert->save();
        }
        return redirect(route('backend.home.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        return view('backend.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        $this->validate($request,[
            'name' => "required",
            'profession' => "required",
            "photo" => "required|mimes:png,jpg,gif,jpeg,webp|max:1024",
            "CoverPhoto" => "required|mimes:png,jpg,gif,jpeg,webp|max:1024"
        ]);

        $photo = $request->file('photo');
        $CoverPhoto = $request->file('CoverPhoto');
        if(!empty($photo or $CoverPhoto)){
            $photo_name = Str::slug($request->name)."_".time(). ".".$photo->getClientOriginalExtension();
            $photo->move(public_path("/storage/home/profile/"),$photo_name);

            $Cphoto_name = Str::slug($request->name)."_".uniqid().".".$CoverPhoto->getClientOriginalExtension();
            $CoverPhoto->move(public_path("/storage/home/coverPic/"),$Cphoto_name);

            // $path = public_path('storage/home/profile/'.$home->photo);
            // $Cpath = public_path('storage/home/coverPic/'.$home->CoverPhoto);
            //     if(file_exists($path)){
            //         unlink($path);
            //         if(file_exists($Cpath)){
            //             unlink($Cpath);
            //         }else{
            //             $Cphoto_name = $home->CoverPhoto;
            //             $photo_name = $home->photo;
            //         }
            //     }
                $home->name = $request->name;
                $home->profession = $request->profession;
                $home->link = $request->link;
                $home->link2 = $request->link2;
                $home->link3 = $request->link3;
                $home->link4 = $request->link4;
                $home->link5 = $request->link5;
                $home->photo = $photo_name;
                $home->CoverPhoto = $Cphoto_name;
                $home->save();
                return back();
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        $home->delete();
        $home->save();
        return back()->with('success', "Banner successfully deleted!");
    }
}
