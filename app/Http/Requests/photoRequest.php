<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class photoRequest extends FormRequest
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
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ];
}

public function messages(): array
{
    return [
        'image.required' => 'Please select an image.',
        'image.image'    => 'The file must be a valid image.',
        'image.mimes'    => 'Allowed formats: jpg, jpeg, png, webp.',
        'image.max'      => 'The image size must not exceed 2MB.',
    ];
}


}
