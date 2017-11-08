<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $method = request()->method();

        return [
            'profile_picture' => $method == 'DELETE' ? '' : 'required',
            'additional_pictures' => $method == 'DELETE' ? '' : 'required',
        ];
    }
}