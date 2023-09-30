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
            'photo' => 'required|string',
            'contact' => 'required|string',
            'occupation' => 'required|string',
            'dateofBirth' => 'required|date',
            'nationality' => 'required|string',
            'cityTown' => 'required|string',
            'landMark' => 'required|string',
            'district' => 'required|string',
            'nationalID' => 'required|string',
            'age' => 'required|string',
            'date' => 'required|date',
            'personalBelongings' => 'nullable|string',
            'personalPhoto' => 'required|string',
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
            'admissionDate' => 'required|date',
            'arrestingAgency' => 'required|string',
            'arrestingOfficer' => 'required|string',
            'chargesFiled' => 'required|string',
            'sentence' => 'required|string',
            'caseNumbers' => 'required|string',
            'attorneyName' => 'required|string',
            'attorneyContact' => 'required|string',
            'medicalConditions' => 'required|string',
            'allergies' => 'required|string',
            'emergencyPerson' => 'required|string',
            'emergencyPhone' => 'required|string',
            'emergencyRelationship' => 'required|string',
            'nextofkin' => 'required|string',
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
            'mothersContact' => 'required|string',
            'fathersContact' => 'required|string',
            'spouseName' => 'required|string',
            'spouseContact' => 'required|string',
            'noSiblings' => 'required|integer',
            'eyebrowLength' => 'required|string',
            'bodyStature' => 'required|string',
            'tatooDescription' => 'required|string',
            'noseType' => 'required|string',
            'eyeSize' => 'required|string',

            
        ];
    }

    
}
