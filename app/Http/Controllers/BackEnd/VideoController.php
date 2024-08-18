<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Tag;
use App\Models\Skill;
use App\Models\Video;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\Backend\Video\Store as StoreVideoRequest;


class VideoController extends BackEndController
{
    public function __construct(Video $model){
        parent::__construct($model);
    }
    
    protected function with(){
        return ['cat','user'];
    }

    protected function append(){

        $array=[
            "categories"=> Category::get(),
            "skills"=>Skill::get(),
            "tags"=>Tag::get(),
            "selectedSkills"=>[],
            "selectedTags"=>[]

        ];

        if(request()->route()->parameter('video')){
            $array['selectedSkills']= $this->model->find(request()->route()->parameter('video'))
            ->skills()->get()->pluck('id')->toArray();
           
        };
        if(request()->route()->parameter('video')){
            $array['selectedTags']= $this->model->find(request()->route()->parameter('video'))
            ->skills()->get()->pluck('id')->toArray();
           
        };

        return $array;
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
    
            
        $requestArray=$request->all() +['user_id'=>auth()->user()->id];
        $row=$this->model->create($requestArray);
       
        $this->syncTagsSkills($row,$requestArray);
       
       
        return redirect()->route('videos.index');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(StorevideoRequest $request, $video)
    {
      
        $row=$this->model->FindOrFail($video);      
        $requestArray=$request->all();
        $row->update($requestArray);
        
        
        return redirect()->route('videos.index');
    }

    protected function syncTagsSkills ($row,$requestArray){
        if(isset($requestArray['skills']) && !empty($requestArray['skills'])){
            $row->skills()->sync($requestArray['skills']);
        }
       
        if(isset($requestArray['tags']) && !empty($requestArray['tags'])){

            $row->tags()->sync($requestArray['tags']);
        }
    }
}
