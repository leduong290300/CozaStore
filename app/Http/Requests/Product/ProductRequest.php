<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required','max:255'],
            'size' => ['required','max:255'],
            'color' => ['required','max:255'],
            'inventory' => ['required'],
            'price' => ['required'],
            'image_product' => ['required','mimes:png,jpg','max:10000'],
            'description_short' => ['required'],
            'description_long' => ['required'],
            'display' => ['required'],
            'category' => ['required']
        ];
    }
}
