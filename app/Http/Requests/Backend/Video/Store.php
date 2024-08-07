<?php

namespace App\Http\Requests\Backend\Video;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'name'=>['required','string','max:255'],
        'des'=>['max:255'],
        'meta_keywords'=>['max:255'],
        'meta_des'=>['max:255'],
        'youtube'=>['required','url','min:10'],
        'cat_id'=>['required'],
        'published'=>['required'],
        'image'=>['required']
        ];
    }
}
