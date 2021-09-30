<?php

namespace App\Http\Requests;

use App\Models\CreateBlog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCreateBlogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('create_blog_edit');
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
            'description' => [
                'required',
            ],
        ];
    }
}
