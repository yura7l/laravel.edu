<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallbackRequest extends FormRequest
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
        /**
         * Request data validation
         */
        return [
            'phone' => 'required|min:10'
        ];
    }

    /**
     * Changing attributes names
     */
    public function attributes()
    {
        return [
            'phone' => 'телефон'
        ];
    }

    /**
     * Changing whole errors messages
     */
    public function messages()
    {
        return [
            '*.required' => 'Поле :attribute є обов\'язковим для заповнення',
            'phone.min' => 'Поле ім\'я повинно містити щонайменше :min символів'
        ];
    }
}
