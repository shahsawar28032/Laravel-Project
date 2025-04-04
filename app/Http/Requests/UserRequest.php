<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|alpha',
            'email'=>'required|unique:users',
            'password'=>'required|alpha_num|min:6',
            'age'=>'required|numeric|min:18',
            'address'=>'required|uppercase',

        ];
    }

   
}
