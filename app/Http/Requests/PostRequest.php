<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.title'=>'required|string|max:100',
            'post.result'=>'required|string|max:200',
            'post.points'=>'required|integer',
            'post.goal'=>'required|integer',
            'post.slogun'=>'required|string|max:100',
            'post.point'=>'required|integer',
            'post.name'=>'required|string|max:100',
            'post.sex'=>'required|string|max:100',
            'post.age'=>'required|integer',
        ];
    }
}
