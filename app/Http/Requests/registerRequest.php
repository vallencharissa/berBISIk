<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'email' => 'required|email|unique:users,email', // email gabole sama kek di db
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages(){

        return[
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Alamat email tidak valid',
            'email.unique' => 'Email tersebut sudah ada, mohon ganti yang lain',
            'password.required' => 'Kata sandi wajib diisi ',
            'password.confirmed' => 'Kata sandi tidak sama',
            'password' => 'Kata sandi minimal 6 huruf'
        ];
    }
}
