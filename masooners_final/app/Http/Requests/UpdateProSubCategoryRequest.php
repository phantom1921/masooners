<?php

namespace App\Http\Requests;

use App\Models\ProSubCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProSubCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pro_sub_category_edit');
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
        ];
    }
}
