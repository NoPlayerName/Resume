<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;

class ResumeController extends Controller
{

public function index()
{
    $profile = Profile::first();
    $skills = Skill::orderBy('order', 'asc')->get();

    return view('cv.index', ['profile' => $profile, 'skills' => $skills] );
}

}
