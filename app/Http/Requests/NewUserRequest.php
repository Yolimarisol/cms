<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewUserRequest extends FormRequest
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
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:48'],
        'lastname'=> ['required', 'string', 'max:48'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'password'=> ['required', 'confirmed','min:7','max:255'],
        'privacy_policy',
        'position_company',
        ];
    }
}
