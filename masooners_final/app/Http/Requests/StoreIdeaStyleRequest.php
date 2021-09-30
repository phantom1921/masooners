<?php

namespace App\Http\Requests;

use App\Models\IdeaStyle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreIdeaStyleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('idea_style_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
