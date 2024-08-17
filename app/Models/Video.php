<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Skill;
use App\Models\Category;

class Video extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'meta_keywords',
        'meta_des',
        'des',
        'youtube',
        'user_id',
        'cat_id',
        'published',
        'image',
        'skill_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function cat(){
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function skills(){
        return $this->belongsToMany(Skill::class,'skills_videos');

    }
}
