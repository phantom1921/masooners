<?php

namespace App\Http\Requests;

use App\Models\IdeaCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreIdeaCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('idea_category_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
}
