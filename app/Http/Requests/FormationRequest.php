<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class FormationRequest extends FormRequest
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
            'label' => ['required', 'min:4',Rule::unique('formations')->ignore($this->route()->parameter('formation'))],
            'description' => ['required', 'min:4'],
            'active' => ['required', 'boolean'],
            'dateFin' => ['required', 'date'],
            'dateDebut' => ['required', 'date', 'before:dateFin'],
            'dure' => ['required'],
            'image'=>['image']
        ];
    }
    
}
