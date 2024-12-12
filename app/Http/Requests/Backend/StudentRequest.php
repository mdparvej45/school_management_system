<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name_en' => 'sometimes|string|max:255',
            'name_bn'=> 'sometimes|string|max:255',
            'class' => 'sometimes|string|max:255', 
            'section'=> 'sometimes|string|max:255', 
            'admission_fee'=> 'nullable|integer',
            'roll' => 'sometimes|string|max:255', 
            'group'=> 'sometimes|string|max:255',
            'scholarship'=> 'nullable|string|max:255', //nullable
            'admission_session' => 'sometimes|string|max:255',
            'admission_year' => 'sometimes|string|max:255',
            'father_name_en' => 'nullable|string|max:255', //nullable
            'father_name_bn' => 'nullable|string|max:255', //nullable
            'father_mobile'=> 'nullable|digits:11',  //nullable
            'mother_name_en' => 'nullable|string|max:255', //nullable
            'mother_name_bn' => 'nullable|string|max:255', //nullable
            'mother_mobile'=> 'nullable|digits:11',  //nullable
            'father_occ' => 'nullable|string|max:255', //nullable
            'mother_occ' => 'nullable|string|max:255', //nullable
            'blood_group' => 'nullable|in:A+,A-,B+,B-,AB+,AB-,O+,O-', //nullable
            'gender' => 'sometimes|in:Male,Female',
            'religion' => 'sometimes|in:Islam, Hinduisum, Buddist, Chirstian',
            'nationality' => 'nullable|string|max:255', //nullable
            'email' => 'nullable|nullable|email|unique:users,email', //nullable
            'dob'=> 'sometimes|date', 
            'guardian_name'=> 'nullable|string|max:255', //nullable
            'guardian_occ'=> 'nullable|string|max:255', //nullable
            'guardian_mobile'=> 'nullable|string|max:255', //nullable
            'grardian_relation' => 'nullable|string|max:255', //nullable
            'present_address'=> 'nullable|string|max:255', //nullable
            'parmanent_address' => 'nullable|string|max:255', //nullable
            'about' => 'nullable|string|max:65535', //nullable

        ];
    }
}
