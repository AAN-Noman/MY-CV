<?php

namespace App\Http\Controllers\FrontendController;

use App\Models\Home;
use App\Models\About;
use App\Models\Noman;
use App\Models\Skill;
use App\Models\Picture;
use App\Models\Service;
use App\Models\Education;
use App\Models\FactSkill;
use App\Http\Controllers\Controller;

class frontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Home::all();
        $abouts = About::all();
        $fact_skill = FactSkill::all();
        $skill = Skill::all();
        $sumary = Noman::all();
        $education = Education::all();
        $picture = Picture::all();
        $service = Service::all();
        return view('layouts.frontendapp', compact('datas', 'abouts', 'fact_skill', 'skill', 'sumary', 'education', 'picture', 'service'));
    }
}
