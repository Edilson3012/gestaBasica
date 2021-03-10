<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductFormRequest extends FormRequest
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
            'tx_name'           => "required|min:3|max:100|unique:produtos",
            'tx_url'            => "required|min:3|max:100|unique:produtos",
            'vl_price'          => "required",
            'tx_description'    => 'max:9000',
            'id_category'       => 'required|exists:categories,id_category'
        ];
    }

    public function messages()
    {
        return [
            'tx_name.required' => 'Campo NOME é obrigatório.',
            'tx_name.min' => 'Mínimo de 3 caracteres para o campo NOME.',
            'tx_name.max' => 'Máximo de 60 caracteres para o campo NOME.',
            'tx_name.unique' => 'O valor informado para o campo NOME já está em uso.',
            'tx_url.required' => 'Campo URL é obrigatório.',
            'tx_url.min' => 'Mínimo de 3 caracteres para o campo URL.',
            'tx_url.max' => 'Máximo de 100 caracteres para o campo URL.',
            'tx_url.unique' => 'O valor informado para o campo URL já está em uso.',
            'tx_description.max' => 'Máximo de 9000 caracteres para o campo DESCRIÇÃO.',
            'vl_price.required' => 'Campo PREÇO é obrigatório.',
            'id_category.required' => 'Campo CATEGORIA é obrigatório.'
            // 'vl_price.min' => 'Mínimo de 3 caracteres para o campo PREÇO.',
            // 'vl_price.max' => 'Máximo de 100 caracteres para o campo PREÇO.',
            // 'vl_price.unique' => 'O valor informado para o campo PREÇO já está em uso.',
        ];
    }
}
