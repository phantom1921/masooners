<?php

namespace App\Http\Requests;

use App\Models\IdeaCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyIdeaCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('idea_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:idea_categories,id',
        ];
    }
}
