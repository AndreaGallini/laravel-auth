<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'nome_progetto' => ['required', Rule::unique('projects')->ignore($this->project)],
            'descrizione' =>['required', 'min:10', 'max:2000'],
            'collaboratori' => ['nullable'],
            'autore'=>['required'],
            'data_inizio_progetto' => ['required'],
        ];
    }
}
