<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Backend\User\Store as StoreUserRequest;
use App\Http\Requests\Backend\User\Update as UpdateUserRequest;

class UserController extends BackEndController
{
    public function __construct(User $model){
        parent::__construct($model);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request using the custom request class
        $validatedData = $request->validate((new StoreUserRequest)->rules());

        // Proceed with the validated data
        $validatedData['password'] = Hash::make($validatedData['password']);
        $this->model->create($validatedData);

        return redirect()->route('users.index');
    }

  


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
        
        $row=$this->model->FindOrFail($user);       
        // Validate the request using the custom request class
        $validatedData = $request->validate((new UpdateUserRequest)->rules());
        
        // Proceed with the validated data
        $validatedData['password'] = Hash::make($validatedData['password']);
       if (isset($validatedData['password']) && $validatedData['password'] !=""){
        $validatedData=$validatedData+['password'=>Hash::make($validatedData['password'])];
       }else{
        unset($validatedData['password']);
       }
     
        $row->update($validatedData);
        return redirect()->route('users.index');
    }
    
    
    
}
