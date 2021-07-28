<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => "required|string|max:60",
            "description" => "required|string|max:160",
            "intro" => "required|string",
            "content" => "required",
            "image" => "nullable|mimes:jpg,jpeg,png,webp|max:255",
        ];
    }
}