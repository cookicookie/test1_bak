<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Validationルール
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'regex:/^[ぁ-んァ-ヶー一-龠]+$/u',
            'kana' => 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
            'year' => 'required',
            'month' => 'not_in:0',
            'date' => 'not_in:0',
            'portal' => 'regex:/^[0-9]{7}$/',
            'email' => 'email',
            'prefectures' => 'not_in:0',
            'municipality' => 'required',
            'later' => 'required',
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
          'name' => '名前',//
          'kana' => 'フリガナ',//全角半角カタカナ
          'year' => '年',
          'month' => '月',
          'date' => '日',
          'portal' => '郵便番号',//ハイフンあり
          'email' => 'メールアドレス',
          'prefectures' => '都道府県',
          'municipality' => '市区町村',
          'later' => '住所',
        ];
    }

    /**
     * エラーメッセージ
     *
     * @return array
     */
    public function messages() {
        return [
            'name.regex' => ':attributeは必須項目です!!',
            'kana.regex' => ':attributeは必須項目です!!',
            'year.required' => ':attributeは必須項目です!!',
            'month.not_in' => ':attributeは必須項目です!!',
            'date.not_in' => ':attributeは必須項目です!!',
            'portal.regex' => ':attributeは必須項目です!!',
            'email.email' => ':attributeは正しい形式で入力してください!!',
            'prefectures.not_in' => ':attributeは必須項目です!!',
            'municipality.required' => ':attributeは必須項目です!!',
            'later.required' => ':attributeは必須項目です!!',

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
            'name',
            'kana',
            'year',
            'month',
            'date',
            'portal',
            'email',
            'prefectures',
            'municipality',
            'later',
        ]);
    }
}
