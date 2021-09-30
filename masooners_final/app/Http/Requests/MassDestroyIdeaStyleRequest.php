<?php

namespace App\Http\Requests;

use App\Models\IdeaStyle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyIdeaStyleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('idea_style_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:idea_styles,id',
        ];
    }
}
