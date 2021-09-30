<?php

namespace App\Http\Requests;

use App\Models\ProfileComment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProfileCommentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('profile_comment_create');
    }

    public function rules()
    {
        return [
            'user' => [
                'string',
                'required',
            ],
        ];
    }
}
