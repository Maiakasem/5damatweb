<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\Backend\Page\Store as StorePageRequest;

class PageController extends BackEndController
{
    public function __construct(Page $model){
        parent::__construct($model);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StorePageRequest)->rules());
        $this->model->create($validatedData);

        return redirect()->route('pages.index');
    }

  


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $page)
    {
       
        
        $row=$this->model->FindOrFail($page);       
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StorePageRequest)->rules());
        
       
     
        $row->update($validatedData);
        return redirect()->route('pages.index');
    }
}
