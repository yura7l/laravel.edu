<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false; // change to true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /**
         * Request data validation
         */
        return [
            /*'name' => 'required|min:2'*/
        ];
    }

    /**
     * Changing attributes names
     */
    /*public function attributes()
    {
        return [
            'name' => 'ім\'я',
            'email' => 'email',
            'message' => 'коментар'
        ];
    }*/

    /**
     * Changing whole errors messages
     */
    /*public function messages()
    {
        return [
            '*.required' => 'Поле :attribute є обов\'язковим для заповнення',
            'name.min' => 'Поле ім\'я повинно містити щонайменше :min символи',
            'message.min' => 'Поле коментар повинно містити щонайменше :min символів',
            '*.email' => 'Поле :attribute повинно містити справжню email адресу',
        ];
    }*/
}
