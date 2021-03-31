<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->user->id,
            'student_number' => 'nullable|string|max:10|unique:users,student_number,' . $this->user->id,
            'password' => 'nullable|string|min:8|max:100|confirmed',
            'password_confirmation' => 'nullable|string|min:8|max:100|same:password',
            'role' => 'required|integer|min:0|max:3',
        ];
    }
}
