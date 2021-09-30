<?php

namespace App\Http\Requests;

use App\Models\CreateBlog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCreateBlogRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('create_blog_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:create_blogs,id',
        ];
    }
}
