<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
        //dd($this->user_id);
        return [

            'name'=>'required|string',
            'user_id'=>'required|integer|exists:users,id',
            'email'=> ['required','string','email',Rule::unique('users','email')->ignore($this->user_id)],
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
