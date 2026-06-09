<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:50',
            'email' => ['required', 'min:5', 'max:100', 'email'],
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '[Custom] The name field is required.',
            'name.min' => '[Custom] The name must be at least 2 characters.',
            'email.required' => '[Custom] The email field is required.',
            'email.email' => '[Custom] The email must be a valid email address.',
            'subject.required' => '[Custom] The subject field is required.',
            'message.required' => '[Custom] The message field is required.',
        ];
    }
}
