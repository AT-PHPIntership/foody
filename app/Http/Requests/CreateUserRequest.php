<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class CreateUserRequest extends FormRequest
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
            'username'       => 'required|string|max:100|unique:users',
            'full_name'      => 'string|max:255',
            'birthday'       => 'date_format:"Y-m-d"',
            'gender'         => 'required|integer|min:0|max:1',
            'phone'          => 'regex:/\(?([0-9]{3})\)?([ . -]?)([0-9]{3})\2([0-9]{4})/',
            'email'          => 'required|string|email|max:255|unique:users',
            'password'       => 'required|string|min:6',
            'role_id'        => 'required|integer|min:1|max:3',
        ];
    }
}
