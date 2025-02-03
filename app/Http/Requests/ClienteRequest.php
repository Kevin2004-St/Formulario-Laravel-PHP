<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nombres" => "required|min:5",
            "apellido" => "required|min:5",
            "email" => "required|email|unique:clientes,email",
            "celular" => "required|digits:10",
            "direccion" => "nullable|min:5",
            "fecha_nacimiento" => "nullable|date|before:today",
            "activo" => "boolean",
        ];
    }

    public function messages()
    {
        return [
            "nombres.required"  => "El campo de nombre es obligatorio",
            "nombres.min"  => "El nombre debe tener minimo 5 caracteres",
            "apellidos.required"  => "El campo de apellidos es obligatorio",
            "apellidos.min"  => "El apellido debe tener minimo 5 caracteres",
            "celular.required"  => "El campo de celular es obligatorio",
            "celular.min"  => "El celular debe tener exactamente 10 caracteres",
            "email.required"  => "El campo de email es obligatorio",
            "email.email"  => "El email debe ser valido",
            "email.unique" => "Este correo ya está registrado",
            "direccion.min"  => "El campo de direccion tiene que ser de minimo 5 caracteres",
            "fecha_nacimiento.before"  => "La fecha de nacimiento no puede ser en el futuro"
            
        ];
    }
}
