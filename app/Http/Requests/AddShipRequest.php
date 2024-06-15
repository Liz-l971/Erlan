<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddShipRequest extends FormRequest
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
         'id_company'=>'required',
          'name'=>'required',
          'reiting'=>'required',
          'eco_class'=>'required',
          'bus_class'=>'required',
          'first_class'=>'required',
          'description'=>'required',
          'img_one'=>'required',
          'img_two'=>'required',
          'img_three'=>'required',
        ];
    }
}
