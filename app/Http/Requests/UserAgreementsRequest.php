<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAgreementsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'index' => ['required', 'integer'],
            'type' => ['required', 'integer'],
            'content' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
