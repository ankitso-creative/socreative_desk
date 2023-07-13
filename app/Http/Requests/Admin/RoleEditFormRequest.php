<?php

namespace App\Http\Requests\Admin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class RoleEditFormRequest extends FormRequest
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
        $user_id = Request::segments()[2];
        $rules = [
            'name' => ['required','string'],
            'role_id' => ['required','integer'],
            'email' => ['required','email','unique:users,email,'.$user_id],
        ];
        return $rules;
    }
}
