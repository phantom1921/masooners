<?php

namespace App\Http\Requests;

use App\Models\Message;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMessageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('message_create');
    }

    public function rules()
    {
        return [
            'userid' => [
                'string',
                'nullable',
            ],
            'customerid' => [
                'string',
                'nullable',
            ],
            'flow' => [
                'string',
                'nullable',
            ],
        ];
    }
}
