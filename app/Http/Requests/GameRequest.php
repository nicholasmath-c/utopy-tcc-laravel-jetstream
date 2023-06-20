<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            'title'=>'required',
            'developer_id'=>'required',
            'genre_game_id'=>'required',
            'short_description'=>'required|max:255',
            'long_description'=>'required',
            'cover'=>'required',
            'banner'=>'required',
            'price'=>'required|numeric',
            'discount'=>'required|numeric',
            'release_date'=>'required|date',
            'age_rating'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'short_description.max'=>'O tamanho máximo da Descrição Curta é de 255 caracteres.'
        ];
    }
}
