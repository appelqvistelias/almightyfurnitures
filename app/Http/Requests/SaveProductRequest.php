<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
            'name' => 'required | max:100',
            'description' => 'nullable | min:3',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for image
            'height' => 'required|integer|min:0|max:1000',
            'width' => 'required|integer|min:0|max:1000',
            'depth' => 'required|integer|min:0|max:1000',
            'price' => 'required | decimal:0,2 | max:100',
            'weight' => 'required | decimal:0,2 | max:100',
            'material' => 'required | max:100',
            'colour' => 'required | max:50',
            'brand' => 'required | max:100',
        ];
    }
}
