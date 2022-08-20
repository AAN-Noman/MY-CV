<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\FactSkill;
use Illuminate\Http\Request;

class FactSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = FactSkill::all();
        return view('backend.about.fact_skill.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.fact_skill.create');
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
            'fact' => 'required',
            'fact2' => 'required',
            'fact3' => 'required',
            'fact4' => 'required',
        ]);
        $insert = New FactSkill();
        $insert->description = $request->description;
        $insert->fact = $request->fact;
        $insert->fact2 = $request->fact2;
        $insert->fact3 = $request->fact3;
        $insert->fact4 = $request->fact4;
        $insert->description2 = $request->description2;
        $insert->save();
        return redirect(route('backend.fact_skill.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FactSkill  $factSkill
     * @return \Illuminate\Http\Response
     */
    public function show(FactSkill $factSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FactSkill  $factSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(FactSkill $factSkill)
    {
        return view('backend.about.fact_skill.edit', compact('factSkill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FactSkill  $factSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactSkill $factSkill)
    {
        $this->validate($request,[
            'fact' => 'required',
            'fact2' => 'required',
            'fact3' => 'required',
            'fact4' => 'required',
        ]);
        $factSkill->description = $request->description;
        $factSkill->fact = $request->fact;
        $factSkill->fact2 = $request->fact2;
        $factSkill->fact3 = $request->fact3;
        $factSkill->fact4 = $request->fact4;
        $factSkill->description2 = $request->description2;
        $factSkill->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FactSkill  $factSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactSkill $factSkill)
    {
        $factSkill->delete();
        $factSkill->save();
        return back()->with('success', "Banner successfully deleted!");
    }
}
