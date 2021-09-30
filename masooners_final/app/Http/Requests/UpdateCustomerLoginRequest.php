<?php

namespace App\Http\Requests;

use App\Models\CustomerLogin;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCustomerLoginRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_login_edit');
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
