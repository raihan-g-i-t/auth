<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UpperCase;

class FormaRequest extends FormRequest
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
            'name' => ['required', new UpperCase],
            'email' => 'required | email'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'reuireeeeeeeeeeeeeeeeed'
        ];
    }

    protected function prepareForValidation():void{
        $this->merge([
            'name' => strtoupper($this->name)
        ]);
    }
}
