<?php

namespace App\Http\Requests;

use App\Models\CustomerLogin;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCustomerLoginRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_login_create');
    }

    public function rules()
    {
        return [
            'email' => [
                'string',
                'required',
            ],
            'password' => [
                'string',
                'nullable',
            ],
        ];
    }
}
