<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;


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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:10',
            'article' => 'required|string|not_regex:/[^A-Za-z0-9]+$/|unique:products,article,' . $this->item->id,
            'status' => 'required|string',
            'size' => 'required|string',
            'color' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'А какой продукт будем продавать?',
            'name.string' => 'С названием товара проблемы',
            'name.min' => 'Наименование продукта слишком короткое',
            'article.string' => 'Намиенование артикуля не понятно',
            'article.required' => 'Без артикуля не найдем продукт',
            'article.not_regex' => 'Что-то в наименовании артикуля смущяет систему',
            'status.string' => 'А как понять что с товаром?',
            'status.required' => 'Без статуса не найдем продукт',
            'size.string' => 'Что-то с текстом о размере товара',
            'size.required' => 'Ну размер то обязателен!',
            'color.string' => 'Не шали!',
            'color.required' => 'Нужно назначить цвет товару',
        ];
    }
}
