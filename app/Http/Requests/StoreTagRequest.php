<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagRequest extends FormRequest
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
            'title' => 'required|min:3',
            'color' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'مقدار :attribute اجباری است.'
        ];
    }

    public function attributes()
    {
        return [
            'title' => "عنوان تگ"
        ];
    }
}
