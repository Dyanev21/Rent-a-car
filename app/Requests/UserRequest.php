<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $method = request()->method();


        return [
            'name' => $method == 'DELETE' ? '' : 'required',
            'email' => $method == 'DELETE' ? '' : 'required|email',
            'password' => $method == 'POST' ? 'required' : ''
        ];
    }
}