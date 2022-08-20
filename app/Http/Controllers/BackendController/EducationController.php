<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = Education::all();
        return view('backend.resume.education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resume.education.index');
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
                // course year institude description
            'course' => 'required',
            'year' => 'required',
            'institude' => 'required'
        ]);
        $insert = new Education();
        $insert->course = $request->course;
        $insert->year = $request->year;
        $insert->institude = $request->institude;
        $insert->description = $request->description;
        $insert->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('backend.resume.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $this->validate($request,[
            // course year institude description
        'course' => 'required',
        'year' => 'required',
        'institude' => 'required'
    ]);
    $education->course = $request->course;
    $education->year = $request->year;
    $education->institude = $request->institude;
    $education->description = $request->description;
    $education->save();
    return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        $education->save();
        return back();
    }
}
