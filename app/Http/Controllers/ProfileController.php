<?php

namespace App\Http\Controllers;

use App\Action\Profile\StoreProfile;
use App\Action\Profile\UpdateProfile;
use App\Data\Profile\ProfileData;
use App\Data\Profile\ProfileResponse;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->can('view')) {
            $title = 'Profile';
            return view('admin.profile', ['title' => $title]);
        }
        return abort(401, 'unauthorize');

    }

    public function getProfile()
    {

        if (auth()->user()->cannot('view')) {
            return abort(401, 'unauthorize');
        }
        $profile = Profile::first();
        return $this->responseSuccess(data: $profile ? ProfileResponse::from($profile) : null);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileData $data)
    {
        if (auth()->user()->cannot('edit')) {
            return abort(401, 'unauthorize');
        }
        StoreProfile::run($data);
        return $this->responseSuccess('Profile berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($profile)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Profile $profile, ProfileData $data)
    {
        // dd($data);
         if (auth()->user()->cannot('edit')) {
            return abort(401, 'unauthorize');
        }
        UpdateProfile::run($profile, $data);
        return $this->responseSuccess('Profile berhasil diupdate');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}