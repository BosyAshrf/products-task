<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
          
            'name' => 'required|unique:products,name',
            'price' => 'required|numeric|min:0.01',
            'quantity' => 'required|integer|min:1',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'name.unique' => 'A name is unique',
            'price.required' => 'A price is required',
            'price.numeric' => 'A price is numeric',
            'price.min' => 'A price is min',
            'quantity.required' => 'A quantity is required',
            'quantity.integer' => 'A quantity is integer',
            'quantity.min' => 'A quantity is min',
        ];
    }
    
}
