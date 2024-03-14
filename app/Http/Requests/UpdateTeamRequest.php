<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function prepareForValidation()
    {
        $this->merge([
            'matched_played'=>$this->win+$this->lose+$this->draw
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'win'=>['required','between:0,3','integer'],
            'lose'=>['required','between:0,3'],
            'draw'=>['required','between:0,3'],
            'goal_for'=>['required','integer'],
            'goal_against'=>['required','integer'],
            'matched_played'=>['required','integer','between:0,3']


        ];
    }
}
