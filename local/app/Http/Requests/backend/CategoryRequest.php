<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'cate_name'=>'unique:Calotery,cate_name',
            'cate_main'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'cate_name.unique'=>'Category đã tồn tại',
            'cate_main.required'=>'please! choise level category ',
        ];
    }
}
