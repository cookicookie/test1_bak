<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CreateloginRequest extends FormRequest
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
             'id' => 'required',
             'pass' => 'required',
         ];
     }

     /**
      * 項目名
      *
      * @return array
      */
     public function attributes()
     {
         return [
           'id' => 'ID',//
           'pass' => 'パスワード',//全角半角カタカナ
         ];
     }

     /**
      * エラーメッセージ
      *
      * @return array
      */
     public function messages() {
         return [
             'id.required' => ':attributeは必須項目です!!',
             'pass.required' => ':attributeは必須項目です!!',
         ];
     }

     /**
      * fillable
      * Modelの$fillableではなく、Requestのonlyで入力値を制御
      *
      * @return array
      */
     public function userAttributes()
     {
         return $this->only([
             'id',
             'pass',
         ]);
     }
 }
