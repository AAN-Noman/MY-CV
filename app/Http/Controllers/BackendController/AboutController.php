<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('backend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
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
            'title' => 'required'
        ]);

        $insert = New About();
        $insert->title = $request->title;
        $insert->description = $request->description;
        $insert->description2 = $request->description2;
        $insert->Birthday = $request->Birthday;
        $insert->Age = $request->Age;
        $insert->Website = $request->Website;
        $insert->Degree = $request->Degree;
        $insert->Phone = $request->Phone;
        $insert->Email = $request->Email;
        $insert->OldCity = $request->OldCity;
        $insert->City = $request->City;
        $insert->Freelance = $request->Freelance;
        $insert->description3 = $request->description3;
        $insert->save();
        return redirect(route('backend.about.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('backend.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->description2 = $request->description2;
        $about->Birthday = $request->Birthday;
        $about->Age = $request->Age;
        $about->Website = $request->Website;
        $about->Degree = $request->Degree;
        $about->Phone = $request->Phone;
        $about->Email = $request->Email;
        $about->OldCity = $request->OldCity;
        $about->City = $request->City;
        $about->Freelance = $request->Freelance;
        $about->description3 = $request->description3;
        $about->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        $about->save();
        return back()->with('success', "Banner successfully deleted!");
    }
}
