<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\Backend\Tag\Store as StoreTagRequest;

class TagController extends BackEndController
{
    public function __construct(Tag $model){
        parent::__construct($model);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreTagRequest)->rules());
        $this->model->create($validatedData);

        return redirect()->route('tags.index');
    }

  


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $tag)
    {
        
        $row=$this->model->FindOrFail($tag);       
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreTagRequest)->rules());
        
       
     
        $row->update($validatedData);
        return redirect()->route('tags.index');
    }
}
