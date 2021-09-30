<?php

namespace App\Http\Requests;

use App\Models\ProSubCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProSubCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pro_sub_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pro_sub_categories,id',
        ];
    }
}
