<?php

namespace App\Http\Requests;

use App\Rules\OficinaWeb;
use Illuminate\Foundation\Http\FormRequest;

class OficinaWebRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    protected function prepareForValidation()
    {
        $dados = $this->all();

        if (isset($dados['documento_1'])) {
            $dados['documento_1'] = str_replace(['.', '-'], '', $dados['documento_1']);
        }

        if (isset($dados['cep'])) {
            $dados['cep'] = str_replace(['.', '-'], '', $dados['cep']);
        }

        $this->replace($dados);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'min:3', new OficinaWeb],
            'documento_1' => ['required', 'integer'],
            'numero' => ['required', 'max:5']
        ];
    }
}
