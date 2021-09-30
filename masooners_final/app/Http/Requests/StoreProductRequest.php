<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_create');
    }

    public function rules()
    {
        return [
            'category_id' => [
                'required',
                'integer',
            ],
            'sub_category_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'string',
                'required',
            ],
            'discription' => [
                'required',
            ],
            'images.*' => [
                'required',
            ],
            'price' => [
                'required',
            ],
        ];
    }
}
