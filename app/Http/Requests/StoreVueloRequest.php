<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use SebastianBergmann\Diff\Diff;

class StoreVueloRequest extends FormRequest
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
            'llegada'=>'after:salida',
            'llegada_id'=>'different:salida_id',
            'codigo'=>'required',
            'salida_id'=>'required',
            'llegada_id'=>'required',
            'compania_id'=>'required',
            'plazas_totales'=>'required',
            'precio'=>'required',
            'salida'=>'required',
            'llegada'=>'required'
            
        ];
    }
}
