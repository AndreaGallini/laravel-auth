<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'nome_progetto' => 'required|unique:projects|min:5|max:100',
            'descrizione' =>'required|min:10|max:2000',
            'collaboratori' => 'nullable',
            'autore'=>'required',
            'data_inizio_progetto' => 'required',
        ];
    }
    public function messages(){
                return [
            'nome_progetto.required' => 'Il titolo è obbligatorio.',
            'nome_progetto.min' => 'Il titolo deve essere lungo almeno :min caratteri.',
            'nome_progetto.max' => 'Il titolo non può superare i :max caratteri.',
            'titnome_progettole.unique:projects' => 'Il titolo esiste già'
        ];
    }
}