<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Hash;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // everyone
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "username" => [
                "required", "max:100", "min:5"
            ],
            "role" => [
                "required", "max:25"
            ],
            "password" => [
                "required", "max:100"
            ],
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $response = response([
            "error" => $validator->getMessageBag()
        ], 400);
        throw new HttpResponseException($response);
    }
}
