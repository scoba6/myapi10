<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
			'body' => ['required', 'string'],
        ];
    }
}
