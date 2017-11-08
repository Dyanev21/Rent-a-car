<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $method = request()->method();

        return [
            'title' => $method == 'DELETE' ? '' : 'required',
            'description' => $method == 'DELETE' ? '' : 'required'
        ];
    }
}