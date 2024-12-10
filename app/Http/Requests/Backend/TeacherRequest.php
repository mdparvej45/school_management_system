<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048', //nullable
            'name_en' => 'sometimes|string|max:255',
            'name_bn'=> 'sometimes|string|max:255',
            'qualification'=> 'nullable|string|max:255', //nullable
            'designation'=> 'nullable|string|max:255', //nullable
            'assign_class'=> 'nullable|string|max:255', //nullable
            'assign_section' => 'nullable|string|max:255', //nullable
            'department'=> 'nullable|string|max:255', //nullable
            'father_name'=> 'nullable|string|max:255', //nullable
            'mother_name'=> 'nullable|string|max:255', //nullable
            'gender'=> 'nullable|string|max:255', //nullable
            'religion'=> 'nullable|string|max:255', //nullable
            'mobile'=> 'sometimes|digits:11', 
            'dob'=> 'sometimes|date', 
            'date_of_join' => 'sometimes|date',
            'married_status' => 'nullable|string|max:255', //nullable
            'marriage_date' => 'nullable|string|max:255', //nullable
            'email' => 'sometimes|nullable|email|unique:teachers,email', //nullable
            'salary' => 'sometimes|numeric',
            'blood_group' => 'nullable|string|max:255', //nullable
            'present_address'=> 'nullable|string|max:255', //nullable
            'parmanent_address' => 'nullable|string|max:255', //nullable
            'about' => 'nullable|string|max:65535', //nullable
        ];
    }
}
