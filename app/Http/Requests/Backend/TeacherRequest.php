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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name_en' => 'sometimes|string|max:255',
            'name_bn'=> 'sometimes|string|max:255',
            'qualification'=> 'sometimes',
            'designation'=> 'sometimes|string|max:255',
            'assign_class'=> 'sometimes|nullable',
            'assign_section' => 'sometimes|nullable',
            'department'=> 'sometimes|nullable',
            'father_name'=> 'sometimes|string|max:255',
            'mother_name'=> 'sometimes|string|max:255',
            'gender'=> 'required',
            'religion'=> 'required',
            'mobile'=> 'sometimes|digits:11',
            'dob'=> 'sometimes|date',
            'date_of_join' => 'sometimes|date',
            'married_status' => 'required',
            'marriage_date' => 'sometimes|date',
            'email' => 'sometimes|email|unique:teachers,email',
            'salary' => 'sometimes|numeric',
            'blood_group' => 'sometimes|nullable',
            'present_address'=> 'sometimes|string',
            'parmanent_address' => 'sometimes|string',
        ];
    }
}
