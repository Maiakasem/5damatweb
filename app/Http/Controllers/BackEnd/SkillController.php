<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\Backend\Skill\Store as StoreSkillRequest;

class SkillController extends BackEndController
{
    public function __construct(Skill $model){
        parent::__construct($model);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreSkillRequest)->rules());
        $this->model->create($validatedData);

        return redirect()->route('skills.index');
    }

  


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $skill)
    {
        
        $row=$this->model->FindOrFail($skill);       
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreSkillRequest)->rules());
        
       
     
        $row->update($validatedData);
        return redirect()->route('skills.index');
    }
}
