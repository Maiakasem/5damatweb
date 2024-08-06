<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'image'
    ];
}
