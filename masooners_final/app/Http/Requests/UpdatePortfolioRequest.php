<?php

namespace App\Http\Requests;

use App\Models\Portfolio;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePortfolioRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('portfolio_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'project_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
