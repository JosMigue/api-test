<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProduct extends FormRequest
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
            'name'=> ['required','max:255','string'],
            'code'=> ['max:255','unique:products,code'],
            'bar_code'=> ['max:255','unique:products,bar_code','nullable'],
            'sku'=> ['max:255', 'unique:products,sku'],
            'price'=> ['required','integer','min:1']
        ];
    }
}
