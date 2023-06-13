<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateFormRequest extends FormRequest
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
            "author_id" => "required|exists:authors,id",
            "title" => "required|max:50",
            "price" => "required|digits:3,6" # 3桁~6桁でないとダメ
        ];
    }

    public function messages()
    {
        return [
            "author_id.required" => "著者を選択してください",
            "author_id.exists" => "無効な著者が選択されています",
            "title.required" => "本のタイトルを入力してください",
            "title.max" => "50文字以内で入力してください",
            "price.required" => "金額を入力してください",
            "price.digits" => "100円未満または10万円を超える金額は登録できません"
        ];
    }
}
