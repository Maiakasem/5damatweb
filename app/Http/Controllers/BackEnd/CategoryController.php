<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\Backend\Category\Store as StoreCategoryRequest;


class CategoryController extends BackEndController
{
    public function __construct(Category $model){
        parent::__construct($model);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreCategoryRequest)->rules());
        $this->model->create($validatedData);

        return redirect()->route('categories.index');
    }

  


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
        
        $row=$this->model->FindOrFail($user);       
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreCategoryRequest)->rules());
        
       
     
        $row->update($validatedData);
        return redirect()->route('categories.index');
    }
    
    
    
}
