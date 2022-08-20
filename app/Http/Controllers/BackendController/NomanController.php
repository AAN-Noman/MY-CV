<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Noman;
use Illuminate\Http\Request;

class NomanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sumary = Noman::all();
        return view('backend.resume.sumary.index', compact('sumary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resume.index');
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
                    //name address phone email description
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $insert = new Noman();
        $insert->name = $request->name;
        $insert->address = $request->address;
        $insert->phone = $request->phone;
        $insert->email = $request->email;
        $insert->description = $request->description;
        $insert->save();
        return back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noman  $noman
     * @return \Illuminate\Http\Response
     */
    public function edit(Noman $noman)
    {
        return view('backend.resume.sumary.edit', compact('noman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noman  $noman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noman $noman)
    {
        $this->validate($request,[
            //name address phone email description
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $noman->name = $request->name;
        $noman->address = $request->address;
        $noman->phone = $request->phone;
        $noman->email = $request->email;
        $noman->description = $request->description;
        $noman->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noman  $noman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noman $noman)
    {
        $noman->delete();
        $noman->save();
        return back();
    }
}
