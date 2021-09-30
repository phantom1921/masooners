<?php

namespace App\Http\Requests;

use App\Models\CustomerContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCustomerContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_contact_create');
    }

    public function rules()
    {
        return [
            'city' => [
                'string',
                'required',
            ],
            'country' => [
                'string',
                'required',
            ],
            'state' => [
                'string',
                'required',
            ],
            'number' => [
                'string',
                'required',
            ],
            'zip' => [
                'string',
                'required',
            ],
            'address' => [
                'required',
            ],
            'customerid' => [
                'string',
                'nullable',
            ],
        ];
    }
}
