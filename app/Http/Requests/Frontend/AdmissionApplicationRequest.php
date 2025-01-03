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
            'dob' => $request->dob,
            'religion' => $request->religion,
            'nationality' => $request->nationality,
            'admission_year' => $request->admission_year,
            'class' => $request->class,
            'section' => $request->section,
            'father_name_en' => $request->father_name_en,
            'f_nid' => $request->f_nid,
            'f_occ' => $request->f_occ,
            'f_orgz' => $request->f_orgz,
            'f_mobile' => $request->f_mobile,
            'f_email' => $request->f_email,
            'mother_name_en' => $request->mother_name_en,
            'm_nid' => $request->m_nid,
            'm_occ' => $request->m_occ,
            'm_orgz' => $request->m_orgz,
            'm_mobile' => $request->m_mobile,
            'm_email' => $request->m_email,
            'emerg_number' => $request->emerg_number,
            'guardian_name' => $request->guardian_name,
            'guardian_occ' => $request->guardian_occ,
            'guardian_mobile' => $request->guardian_mobile,
            'guardian_relation' => $request->guardian_relation,
            'guardian_email' => $request->guardian_email,
            'present_address' => $request->present_address,
            'parmanent_address' => $request->parmanent_address,
            'about' => $request->about,
        ];
    }
}
