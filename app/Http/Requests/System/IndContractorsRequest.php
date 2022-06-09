<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class IndContractorsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'surname' => 'string',
        ];
    }
}
