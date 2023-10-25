<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom'=>['required','string','min:2'],
            'formations_id'=>['required','exists:formations,id'],
            'user_id'=>['required','exists:users,id'],
            'prenom'=>['required','string','min:2'],
            'telephone'=>['required','numeric','min:10'],
            'email'=>['required','email','min:2'],
            'address'=>['required','string','min:4'],
            'specialite'=>['required','string','min:4'],
            'dateNaissance'=>['required','date'],
            'lieuNaissance'=>['required','string','min:4'],
           
        ];
    }
}
