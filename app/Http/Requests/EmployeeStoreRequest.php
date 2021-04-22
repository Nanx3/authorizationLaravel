<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
            "first_name" => 'required | max:255',
            "last_name" => 'required | max:255',
            "email" => 'required | email | max:255',
            "phone_number" => 'required | max:15'
        ];
    }
    
    public function attributes() {
        return [
          "first_name" => 'nombre',
          "last_name" => 'apellido',
          "phone_numer" => 'teléfono'
        ];
    }
    
    public function messages(){
     return [
         "first_name.required" => "El :attribute es un parametro requerido",
         "email.required" => "El :attribute es un parametro requerido",
         "email.email" => "El :attribute no es una dirección de correo valida"
     ];
    }
}
