<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ResumeController extends Controller
{

public function index()
{
    $profile = Profile::first();

    return view('cv.index', ['profile' => $profile] );
}

}
