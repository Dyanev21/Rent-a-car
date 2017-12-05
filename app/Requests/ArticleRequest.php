<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'description' => $method == 'DELETE' ? '' : 'required',
            'profile_picture' => $method == 'DELETE' ? '' : 'required',
            'price_per_day' => $method == 'DELETE' ? '' : 'required',
            'additional_pictures' => $method == 'DELETE' ? '' : 'required'
        ];
    }
}