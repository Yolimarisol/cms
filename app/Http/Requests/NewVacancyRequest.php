<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewVacancyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['string', 'required'],
            'companies_id'=> ['integer', 'required'],
            'types_id'=> ['integer', 'required'],
            'address' => ['string', 'required'],
            'requirements' => ['text', 'required'],
            'expedition_date' => ['date', 'required'],
            'state'=> ['integer', 'required'],
            'responsibilities' => ['text', 'required'],
            'description' => ['string', 'required'],
            'slug' => ['string', 'required'],
            'created_at' => ['date', 'required'],
        ];
    }
}
