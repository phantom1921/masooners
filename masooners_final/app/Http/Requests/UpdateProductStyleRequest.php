<?php

namespace App\Http\Requests;

use App\Models\ProductStyle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductStyleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_style_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
