<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTouristRequest extends FormRequest
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
            
           'psevdoname'=>'required',
           'surname'=>'required',
           'name'=>'required',
           'patronymic'=>'required',
           'date'=>'required',
           'gender'=>'required',
           'nation'=>'required',
           'number'=>'required',
           'email'=>'required|email',

        ];
    }
}
