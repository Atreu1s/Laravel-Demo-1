<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'surname' => 'required','string','max:30',
            'name' => 'required','string','max:30',
            'patronymic' => 'required','string','max:30',
            'login' => 'required','string','max:30',
            'email' => 'required','string','max:30',
            'password' => 'required','string','max:60',
            'password-repeat' => 'required','string','max:60',
        ];
    }
}
