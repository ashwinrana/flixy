<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterFOrm extends Request
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
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'email|required|unique,users',
            'user_name' => 'unique:connection.users,user_name|required',
//            'user_name' => 'required|unique,users',
        ];
    }
}
