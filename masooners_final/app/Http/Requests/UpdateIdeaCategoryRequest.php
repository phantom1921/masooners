<?php

namespace App\Http\Requests;

use App\Models\IdeaCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIdeaCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('idea_category_edit');
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
