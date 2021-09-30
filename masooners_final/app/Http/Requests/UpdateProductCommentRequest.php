<?php

namespace App\Http\Requests;

use App\Models\ProductComment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductCommentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_comment_edit');
    }

    public function rules()
    {
        return [
            'user_type' => [
                'string',
                'required',
            ],
            'user' => [
                'string',
                'required',
            ],
            'comment' => [
                'string',
                'required',
            ],
        ];
    }
}
