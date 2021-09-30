<?php

namespace App\Http\Requests;

use App\Models\CustomerLogin;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCustomerLoginRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('customer_login_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:customer_logins,id',
        ];
    }
}
