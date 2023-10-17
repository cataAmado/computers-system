<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerRequest extends FormRequest
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
            'name' => 'required|string|max:20|unique:computers',
            'description' => 'required|string|max:100',
            'os' => 'required|string|max:30',
            'ram' => 'required|string|max:1000',
            'price' => 'required|numeric|min:1|max:5000000',
            'storage' => 'required|string|max:1000',
            'monitor' => 'required|string|max:32',
            'purchase_date' => 'required|date',

        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'description.required' => 'A description is required',
            'os.required' => 'An operating system is required',
            'ram.required' => 'RAM is required',
            'price.required' => 'A price is required',
            'storage.required' => 'Storage is required',
            'monitor.required' => 'A monitor is required',
            'purchase_date.required' => 'A purchase date is required',


        ];
    }
}
