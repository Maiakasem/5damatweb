<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Category;
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
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows=$this->model->with('cat','user');
        $rows=$this->filter($rows);
        $rows=$rows->paginate(10);

        $moduleName=$this->pluralModelName();
        $routeName=$this->getClassNameFromModel();
        $pageTitle="Control";
        $pageDesc="Here you can add/edit/delete ".$moduleName;
        $IdName=$this->getId();
        return view('backend.admin.'.$this->getClassNameFromModel().'.index',compact('rows','moduleName','pageTitle','pageDesc','routeName','IdName'));
        
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $moduleName=$this->pluralModelName();
        $pageTitle="Create";
        $folderName=$this->getClassNameFromModel();
        $pageDesc="Here you can add ".$folderName;
        $IdName=$this->getId();
        $categories=Category::get();
        $skills=Skill::get();
        return view('backend.admin.'.$folderName.'.create',compact('moduleName','pageTitle','pageDesc','folderName','IdName','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreVideoRequest)->rules());
        $this->model->create($validatedData +['user_id'=>auth()->user()->id]);

        return redirect()->route('videos.index');
    }

   /**
     * Show the form for editing the specified resource.
     */
    public function edit($video)
    {
        $moduleName=$this->pluralModelName();
        $pageTitle="Edit";
        $row= $this->model->FindOrFail($video);
        $folderName=$this->getClassNameFromModel();
        $routeName=$this->getClassNameFromModel();
        $pageDesc="Here you can edit ".$folderName;
        $IdName=$this->getId();
        $categories=Category::get();
        
        return view ('backend.admin.'. $folderName.'.edit',compact('row','moduleName','pageTitle','pageDesc','folderName','routeName','IdName','categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $video)
    {
       dd($request);
        
        $row=$this->model->FindOrFail($page);       
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StorevideoRequest)->rules());
        
       
     
        $row->update($validatedData);
        return redirect()->route('videos.index');
    }
}
