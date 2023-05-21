<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'title'=>'required|string',
            'category_id'=>'required|integer|exists:categories,id',
            'content'=>'required|string',
            'preview_image'=>'required|file',
            'main_image'=>'required|file',
            'tag_ids'=>'nullable|array',
            'tag_ids.*'=>'nullable|integer|exists:tags,id',

        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Это поле необходимо для заполнения',
            'title.string'=>'Эти данные должны соответсвовать строчному типу',
            'category_id.required'=>'Это поле необходимо для заполнения',
            'category_id.integer'=>'Id категории долежн быть числом',
            'preview_image.required'=>'Это поле необходимо для заполнения',
            'preview_image.file'=>'Необходисо выбрать файл',
            'main_image.required'=>'Это поле необходимо для заполнения',
            'main_image.file'=>'Необходисо выбрать файл',
            'tag_ids.array'=>'Необходисо отправить массив данных',
            'content.required'=>'Это поле необходимо для заполнения',
            'content.string'=>'Эти данные должны соответсвовать строчному типу',


        ];
    }
}
