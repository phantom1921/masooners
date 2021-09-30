<?php

namespace App\Http\Requests;

use App\Models\ProfessionalProfile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProfessionalProfileRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('professional_profile_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:professional_profiles,id',
        ];
    }
}
