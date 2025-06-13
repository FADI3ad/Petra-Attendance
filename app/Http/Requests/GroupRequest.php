<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            
            'name' => 'string|max:255',
            'level' => 'in:level 1,level 2,level 3',
        ];
    }
}
