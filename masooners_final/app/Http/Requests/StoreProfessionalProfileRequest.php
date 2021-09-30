<?php

namespace App\Http\Requests;

use App\Models\ProfessionalProfile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProfessionalProfileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('professional_profile_create');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
