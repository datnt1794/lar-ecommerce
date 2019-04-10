<?php

namespace TTSoft\Acl\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'full_name'      => 'required',
            'email'     => 'required|email|unique:users,email,'.$this->id,
        ];
    }

    public function messages(){
        return [
                // 'email.required'    => 'Vui lòng nhập email đăng nhập mới!',
                // 'email.email'       => 'Email sai định dạng!',
                // 'email.unique'      => 'Email đã tồn tại!',
                // 'username.required' => 'Tài khoản không được bỏ trống',
                // 'username.unique'   => 'Tài khoản đã tôn tại',
                // 'group.required'    => 'Vui lòng chọn quyền',
                // 'phone.required'         => 'Vui lòng nhập số điện thoại',
                // 'phone.numeric'         => 'Điện thoại phải là số',
        ];
    }
}
