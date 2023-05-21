<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

       // dd($this->name);
        return [

            'name'=>'required|string',
            'email'=>'required|string|email|unique:users,email',
            'role'=>'required|integer',

        ];
    }

    public function messages()
    {

        return [
            'email.unique'=>'Такой email уже существует',
            'email.email'=>'Почта должна соответсвовать формату mail@some.domain',
        ];
    }

}
