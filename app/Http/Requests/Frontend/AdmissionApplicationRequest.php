<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class AdmissionApplicationRequest extends FormRequest
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
            'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name_en' => 'sometimes|string|max:255',
            'birth_reg_no' => 'sometimes|integer|max:255', 
            'gender' => 'sometimes|string|max:255',
            'blood_group' => 'nullable|string|max:255',
            'dob' => 'sometimes|date', 
            'religion' => 'sometimes|string|max:255',
            'nationality' => 'sometimes|string|max:255',
            'admission_year' => 'sometimes|string|max:255',
            'class' => 'sometimes|string|max:255', 
            'section' => 'sometimes|string|max:255', 
            'father_name_en' => 'sometimes|string|max:255', 
            'f_nid' => 'sometimes|integer|max:255', 
            'f_occ' => 'sometimes|string|max:255', 
            'f_orgz' => 'sometimes|string|max:255', 
            'f_mobile' => 'sometimes|integer|max:255', 
            'f_email' => 'nullable|email|unique:users,email',
            'mother_name_en' => 'sometimes|string|max:255', 
            'm_nid' => 'sometimes|integer|max:255',
            'm_occ' => 'sometimes|string|max:255', 
            'm_orgz' => 'sometimes|string|max:255', 
            'm_mobile' => 'sometimes|integer|max:255',
            'm_email' => 'nullable|email|unique:users,email',
            'emerg_number' => 'sometimes|integer|max:255',
            'guardian_name' => 'sometimes|string|max:255', 
            'guardian_occ' => 'sometimes|string|max:255', 
            'guardian_mobile' => 'sometimes|integer|max:255',
            'guardian_relation' => 'sometimes|string|max:255', 
            'guardian_email' => 'nullable|email|unique:users,email',
            'present_address' => 'nullable|string|max:255',
            'parmanent_address' => 'nullable|string|max:255',
            'about' => 'nullable|string|max:255',
        ];
    }
}
