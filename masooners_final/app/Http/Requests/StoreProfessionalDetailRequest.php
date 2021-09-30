<?php

namespace App\Http\Requests;

use App\Models\ProfessionalDetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProfessionalDetailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('professional_detail_create');
    }

    public function rules()
    {
        return [
            'business_name' => [
                'string',
                'required',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'country' => [
                'string',
                'required',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
