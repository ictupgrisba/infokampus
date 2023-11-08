<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventPostPostRequest extends FormRequest
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
            "title" => [
                "required", "min:5", "max:255"
            ],
            "address" => [
                "required", "min:5", "max:255"
            ],
            "location_name" => [
                "required", "min:3", "max:100"
            ],
            "longitude" => [
                "required", "min:3", "max:25"
            ],
            "latitude" => [
                "required", "min:3", "max:25"
            ],
            "date_start" => [
                "required", "min:3", "max:25"
            ],
            "time_start" => [
                "required", "min:3", "max:25"
            ],
            "is_endless" => [
                "required"
            ]
        ];
    }
}
