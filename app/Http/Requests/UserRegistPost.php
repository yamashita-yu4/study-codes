<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須入力項目です',
            'name.max' => '名前は最大20文字まで入力できます',
            'email.required' => 'メールアドレスは必須入力項目です',
            'email.email' => 'メールアドレスの形式が正しくありません',
            'email.max' => 'メールアドレスは最大255文字まで入力できます',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
        ];
    }
}
