<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddHotelRequest extends FormRequest
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

            'name'=>'required',
            'reiting'=>'required',
            'place'=>'',
            'max_days'=>'required',
            'description'=>'required',
            'services'=>'required',
            'feed'=>'required',
            'concepc'=>'required',
            'terms'=>'required',
            'img'=>'required'

        ];
    }
}
