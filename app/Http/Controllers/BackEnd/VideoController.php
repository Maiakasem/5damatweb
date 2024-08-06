<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\Backend\Video\Store as StoreVideoRequest;


class VideoController extends BackEndController
{
    public function __construct(Video $model){
        parent::__construct($model);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreVideoRequest)->rules());
        $this->model->create($validatedData);

        return redirect()->route('videos.index');
    }

  


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $page)
    {
       
        
        $row=$this->model->FindOrFail($page);       
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StorevideoRequest)->rules());
        
       
     
        $row->update($validatedData);
        return redirect()->route('videos.index');
    }
}
