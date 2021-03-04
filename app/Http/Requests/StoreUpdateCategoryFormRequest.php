<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCategoryFormRequest extends FormRequest
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
        $id = $this->segment(3);

        return [
            'tx_title' => "required|min:3|max:60|unique:categories,tx_title,{$id},id_category",
            'tx_url' => "required|min:3|max:60|unique:categories,tx_url,{$id},id_category",
            'tx_description' => 'max:2000',
        ];
    }

    public function messages()
    {
        return [
            'tx_title.required' => 'Campo TÍTULO é obrigatório.',
            'tx_title.min' => 'Mínimo de 3 caracteres para o campo Título.',
            'tx_title.max' => 'Máximo de 60 caracteres para o campo Título.',
            'tx_title.unique' => 'O valor informado para o campo Título já está em uso.',
            'tx_url.required' => 'Campo URL é obrigatório.',
            'tx_url.min' => 'Mínimo de 3 caracteres para o campo URL.',
            'tx_url.max' => 'Máximo de 60 caracteres para o campo URL.',
            'tx_url.unique' => 'O valor informado para o campo URL já está em uso.',
            'tx_description.max' => 'Máximo de 60 caracteres para o campo DESCRIÇÃO.'
        ];
    }
}
