<?php

namespace App\Http\Requests;

use App\Models\CreateBlog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCreateBlogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('create_blog_create');
    }

    public function rules()
    {
        return [
            'category_id' => [
                'required',
                'integer',
            ],
            'title' => [
                'string',
                'required',
            ],
            'image' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
