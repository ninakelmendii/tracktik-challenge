<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirstProviderRequest extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => ['required', 'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'],
            'gender' => 'required',
            'job_title' => 'required',
            'region' => 'required'
        ];
    }
}
