<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=> 'required|min:2|max:50',
            'author'=> 'required|min:2|max:50',
            'body'=> 'required|min:2|max:5000',

        ];
    }

    public function messages(){
        return [

            'title.required' => "il titolo è obbligatorio",
            'author.required' => "il nome utente è obbligatorio",
            'body.required' => "il testo è obbligatrorio",

            'title.min' => "il titolo è troppo corto ,deve essre più lungo di 2 caratteri",
            'author.min' => "il nome utente è troppo corto ,deve essre più lungo di 2 caratteri",
            'body.min' => "il testo è troppo corto ,deve essre più lungo di 2 caratteri",

            'title.max' => "il titolo è troppo lungo  ,deve essre massimo di 50 caratteri",
            'author.max' => "il nome utente è troppo lungo ,deve essre massimo di 50 caratteri",
            'body.max' => "il testo è troppo lungo ,deve essre massimo di 5000 caratteri",
        ];
    }
}
