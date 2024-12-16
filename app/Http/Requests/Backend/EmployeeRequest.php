<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'unique_id' => 'sometimes|string|max:255',
            'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048', //nullable
            'type' => 'sometimes|string|max:255',
            'name' => 'sometimes|string|max:255',
            'blood_group' => 'nullable|string|max:255', //nullable
            'designation' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'monthly_salary' => 'sometimes|integer',
            'father_name' => 'nullable|string|max:255',
            'mother_name'=> 'nullable|string|max:255',
            'gender' => 'sometimes|string|max:255',
            'religion'=> 'sometimes|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'nid' => 'sometimes|string|max:255',
            'mobile' => 'nullable|integer',
            'email' => 'nullable|email|unique:users,email',
            'join_date' => 'sometimes|date',
            'dob' => 'sometimes|date',
            'present_address' => 'nullable|string|max:65535',
            'permanent_address' => 'nullable|string|max:65535',
            'about' => 'nullable|string|max:65535',    


        ];
    }
}
