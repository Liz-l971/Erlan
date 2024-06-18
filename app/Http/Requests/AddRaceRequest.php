<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRaceRequest extends FormRequest
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
            //
            'otcuda'=>"required",
            'cuda'=>"required",
            'time_otb'=>"required",
            'time_prib'=>"required",
            'company'=>"required",
            'ship'=>"required",
            'cost_ec'=>"",
            'cost_bus'=>"",
            'cost_first'=>"",
            
        ];
    }
}
