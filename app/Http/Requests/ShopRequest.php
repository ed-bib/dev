<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
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
     * Набор правил для текстовых полей HTML-формы
     *
     * @return array
     */
    public function rules()
    {
        return [
            'programId' => 'required',
            'ean' => 'required',
            'merchantEmail' => 'required',
            'merchantCategory' => 'required',
            'manufacturer' => 'required',
            'programName' => 'required',
            'image' => 'required',
            'name' => 'required',
            'price' => 'required',
            'priceOld' => 'required',
            'shippingCosts' => 'required',
            '@id' => 'required',
            'currency' => 'required',
            'description' => 'required',            
            'modified' => 'required|date',
        ];
    }
}
