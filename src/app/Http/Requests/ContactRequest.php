<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name'=>'required' , 'string',
            'last_name'=>'required' , 'string',
            'gender'=>'required' ,
            'email'=>'required' , 'string' , 'email',
            'tel_1'=>'required' , 'numeric',
            'tel_2'=>'required' , 'numeric',
            'tel_3'=>'required' , 'numeric',
            'address'=>'required' , 'string',
            'categories'=>'required|exists:categories,id' ,
            'content'=>'required' , 'string'
        ];
    }

        public function messages()
    {
        return  [
            'first_name.required' => '性を入力してください',
            'first_name.string' => '性を文字列で入力してください',
            'last_name.required' => '名を入力してください',
            'last_name.string' => '名を文字列で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレスを入力してください',
            'tel_1.required' => '電話番号を入力してください',
            'tel_1.numeric' => '電話番号を数字で入力してください',
            'tel_2.required' => '電話番号を入力してください',
            'tel_2.numeric' => '電話番号を数字で入力してください',
            'tel_3.required' => '電話番号を入力してください',
            'tel_3.numeric' => '電話番号を数字で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'categories.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.string' => 'お問い合わせ内容を文字列で入力してください',
        ];
    }
}
