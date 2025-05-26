<?php

namespace App\Http\Controllers;

use App\Data\Skills\SkillsResponse;
use App\Action\Skills\StoreSkills;
use App\Data\Skills\SkillsData;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(auth()->user()->can('view')) {
            $title = 'Skills';
            
            return view('admin.skills', ['title' => $title]);
        }
        return abort(401, 'unauthorize');
    }

    public function getSkills()
    {
      
        if(auth()->user()->can('view')) {
            $skills = Skill::orderBy('order', 'asc')->get();

            return $this->responseSuccess(data: $skills->isEmpty() ? null : SkillsResponse::collection($skills));
        }
        return abort(401, 'unauthorize');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillsData $data)
    {
        
        if(auth()->user()->can('edit')) {
            foreach ($data->skills as $val) {
                    StoreSkills::run($val);  
            }
            return $this->responseSuccess(
                'Skills berhasil disimpan'
            );
        }
        return abort(401, 'unauthorize');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}