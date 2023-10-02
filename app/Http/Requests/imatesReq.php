<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class imatesReq extends FormRequest
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
            'firstName' => 'required|string',
            'middleName' => 'required|string',
            'lastName' => 'required|string',
            // 'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact' => 'required|string',
            'occupation' => 'required|string',
            'dateofBirth' => 'required|string',
            'nationality' => 'required|string',
            'cityTown' => 'required|string',
            'landMark' => 'required|string',
            'district' => 'required|string',
            'nationalID' => 'required|string',
            'age' => 'required|integer',
            'date' => 'nullable|string',
            'personalBelongings' => 'nullable|string',
            // 'personalPhoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'eyeColor' => 'required|string',
            'skinTone' => 'required|string',
            'hairColor' => 'required|string',
            // 'inmateID' => 'required|string',
            // 'External_inmateID' => 'nullable|string',
            'cellAssignment' => 'required|string',
            'securityClassification' => 'required|string',
            'custodialStatus' => 'required|string',
            'admissionDate' => 'required|string',
            'arrestingAgency' => 'required|string',
            'arrestingOfficer' => 'required|string',
            'chargesFiled' => 'required|string',
            'sentence' => 'required|integer',
            'caseNumbers' => 'required|string',
            'attorneyName' => 'required|string',
            'attorneyContact' => 'required|string',
            'medicalConditions' => 'required|string',
            'allergies' => 'required|string',
            'emergencyPerson' => 'required|string',
            'emergencyPhone' => 'required|string',
            'emergencyRelationship' => 'required|string',
            'nextofkin' => 'required|string',
            'nextofkinPhone' => 'required|string',
            'nextofkinRelationship' => 'required|string',
            'medications' => 'nullable|string',
            'specialNeeds' => 'nullable|string',
            'approvedVisitors' => 'nullable|string',
            'disciplinaryActions' => 'nullable|string',
            'educationalLevel' => 'required|string',
            'religion' => 'required|string',
            'gender' => 'required|string',
            'maritalStatus' => 'required|string',
            'houseNumber' => 'required|string',
            'digitalAddress' => 'required|string',
            'mothersContact' => 'nullable|string',
            'fathersContact' => 'nullable|string',
            'spouseName' => 'nullable|string',
            'spouseContact' => 'nullable|string',
            'noSiblings' => 'nullable|integer',
            'eyebrowLength' => 'nullable|string',
            'bodyStature' => 'nullable|string',
            'tatooDescription' => 'required|string',
            'noseType' => 'required|string',
            'eyeSize' => 'required|string',

            
        ];
    }

    
}
