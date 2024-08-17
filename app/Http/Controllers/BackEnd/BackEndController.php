<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BackEndController extends Controller
{
    public function __construct(Model $model){
        $this->model=$model;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows=$this->model;
        $rows=$this->filter($rows);
        $with=$this->with();
        if (!empty($with)){
            $rows=$rows->with($with);
        }
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
        $append = $this->append();
       
        return view('backend.admin.'.$folderName.'.create',compact('moduleName','pageTitle','pageDesc','folderName','IdName'))->with($append);
    }



    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user)
    {
        $moduleName=$this->pluralModelName();
        $pageTitle="Edit";
        $row= $this->model->FindOrFail($user);
        $folderName=$this->getClassNameFromModel();
        $routeName=$this->getClassNameFromModel();
        $pageDesc="Here you can edit ".$folderName;
        $IdName=$this->getId();
        $append = $this->append();
       
      
        return view ('backend.admin.'. $folderName.'.edit',compact('row','moduleName','pageTitle','pageDesc','folderName','routeName','IdName'))->with($append);
    }
   
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user)
    {
        $this->model->FindOrFail($user)->delete();
        return redirect()->route($this->getClassNameFromModel().'.index');
    }


    protected function filter($rows){
         
        return $rows;
    }

    protected function getClassNameFromModel(){
        return strtolower($this->pluralModelName());
        
    }

    protected function pluralModelName(){
       return Str::plural($this->getModelName());
       
    }

    protected function getModelName(){
       return class_basename($this->model);
       
       
       
    }
    protected function getId(){
       return strtolower($this->getModelName());
       
    }

    protected function with(){
        return [];
    }

    protected function append(){
        return [];
    }
}
