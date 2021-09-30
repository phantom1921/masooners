<?php

namespace App\Http\Requests;

use App\Models\ProductStyle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProductStyleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('product_style_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:product_styles,id',
        ];
    }
}
