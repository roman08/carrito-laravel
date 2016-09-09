<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name' => 'required|min:1',
            'last_name' => 'required|min:1',
            'username' => 'required|min:1|max:14|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'address' => 'required|min:1',
        ];
    }
}
