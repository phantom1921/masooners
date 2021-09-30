<?php

namespace App\Http\Requests;

use App\Models\Order;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_create');
    }

    public function rules()
    {
        return [
            'order_no' => [
                'string',
                'nullable',
            ],
            'status' => [
                'string',
                'nullable',
            ],
            'total_bill' => [
                'string',
                'nullable',
            ],
            'customer' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
        ];
    }
}
