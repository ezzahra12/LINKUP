<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => "required|max:60|string",
            'pseudo' => "required|max:60|string",
            'email' => "required|max:150|string|email|unique:users,email",
            "password" => "required|min:8|string|confirmed"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Name is required",
            'name.max' => 'Name must not exceed 60 characters',
            'name.string' => 'Name must be a valid string',

            'pseudo.required' => 'Pseudo is required',
            'pseudo.max' => 'Pseudo must not exceed 60 characters',
            'pseudo.string' => 'Pseudo must be a valid string',

            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'email.max' => 'Email must not exceed 150 characters',
            'email.unique' => 'This email is already taken',

            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.confirmed' => 'Password confirmation does not match',
        ];
    }
}
