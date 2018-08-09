<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateStoreRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'phone' => 'required|integer|regex:/\(?([0-9]{3})\)?([ . -]?)([0-9]{3})\2([0-9]{4})/',
            'address' => 'required|string',
            'describe' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'time_open' => 'date_format:"H:i:s"',
            'time_close' => 'date_format:"H:i:s"'
        ];
    }
}
