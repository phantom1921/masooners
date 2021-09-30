<?php

namespace App\Http\Requests;

use App\Models\ProSubCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProSubCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pro_sub_category_create');
    }

    public function rules()
    {
        return [
            'prof_category_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'string',
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
}
