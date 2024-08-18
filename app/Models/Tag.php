<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    protected $fillable =["name"];
    public function videos(){
        return $this->belongsToMany(Video::class,'tags_videos');

    }
}
