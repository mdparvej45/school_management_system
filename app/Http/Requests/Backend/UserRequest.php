<?php

namespace App\Http\Requests\Backend;

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
            'role' => 'sometimes|in:Superadmin, Principle, Teacher, Accountant, Operator, Student',
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email',
            'mobile' => 'sometimes|digits:11',
            'password' => 'sometimes|string|max:255',
        ];
    }
}
