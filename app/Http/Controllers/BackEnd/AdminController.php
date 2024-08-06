<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Admin;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEnd\BackEndController;

class AdminController extends BackEndController
{
    public function __construct(Skill $model){
        parent::__construct($model);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backEnd.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show( $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $admin)
    {
        //
    }
}
