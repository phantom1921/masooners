<?php

namespace App\Http\Requests;

use App\Models\Idea;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIdeaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('idea_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
