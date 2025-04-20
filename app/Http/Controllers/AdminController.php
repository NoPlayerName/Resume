<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
    return view('admin.index', ['user'=> $user]);
    }

    public function profile()
    {
        $title = 'Profile';
        return view('admin.profile', ['title' => $title]);
    }
}
