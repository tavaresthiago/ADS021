<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'area' => 'required|numeric',
            //'situacao' => 'required|max255'
        ];
    }
    
    public function messages() {
        return[
            'area.required' => 'Campo area é obrigatório',
            'area.numeric' => 'Campo area é numerico',
            'area.required' => 'Campo area é obrigatório',
            'area.max' => 'Campo area aceita até 255 caracteres'
            
        ];
    }
}
