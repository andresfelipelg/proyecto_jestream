<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReclamoRequest extends FormRequest
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
            'fecha_ingreso' => 'required',
            'cliente' => 'required',
            'comercial' => 'required',
            'ciudad' => 'required',
            'factura' => 'required',
            'producto' => 'required',
            'referencia' => 'required',
            'cantidad' => 'required',
            'lote_serial' => 'required',
            'marca' => 'required',
            'estado' => 'required',
            'descripcion_problema' => 'required',
        ];
    }
}
