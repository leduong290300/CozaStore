<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegisterRequest extends FormRequest
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
          'username' => ['required','max:255'],
          'email' => ['required','email','max:100','regex:/(.*)@gmail\.com/i'],
          'address' => ['required','max:255'],
          'phone' =>['required','max:10'],
          'password' => ['required','confirmed','between:8,32'],
          'password_confirmation' => ['required']
        ];
    }
}
