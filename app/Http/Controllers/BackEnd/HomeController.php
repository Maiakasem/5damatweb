<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends BackEndController
{
    public function __construct(Skill $model){
        parent::__construct($model);
    }
}
