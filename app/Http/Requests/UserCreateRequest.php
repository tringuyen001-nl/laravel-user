<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => 'required|min:3|unique:users,name',
            'password' => 'required|min:3|max:32',
            'email' => 'required|email|unique:users,email',
            're_password' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập trường này',
            'name.unique' => 'Name đã tồn tại',
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'email.required' => 'Vui lòng nhập trường này',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Vui lòng nhập trường này',
            'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự',
            'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
            'passwordAgain.required' => 'Vui lòng nhập trường này',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp',
        ];
    }
}
