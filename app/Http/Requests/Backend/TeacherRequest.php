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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_en' => 'sometimes|string|max:255',
            'name_bn'=> 'sometimes|string|max:255',
            'qualification'=> 'sometimes|string|max:255',
            'designation'=> 'sometimes|string|max:255',
            'assign_class'=> 'sometimes',
            'assign_section' => 'sometimes',
            'department'=> 'sometimes',
            'father_name'=> 'sometimes|string|max:255',
            'mother_name'=> 'sometimes|string|max:255',
            'gender'=> 'sometimes|in:Male, Female',
            'religion'=> 'sometimes|in:Islam, Hinduisum, Buddist, Chirstian',
            'mobile'=> 'sometimes|digits:11',
            'dob'=> 'sometimes|date',
            'email' => 'sometimes|email|unique:users,email',
            'salary' => 'sometimes|numeric',
            'blood_group' => 'sometimes',
            'present_address'=> 'sometimes|string|min:10',
            'parmanent_address' => 'sometimes|string|min:10',


        ];
    }
}
