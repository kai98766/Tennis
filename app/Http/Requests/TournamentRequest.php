<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TournamentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tournament.name'=>'required|string|max:100',
            'tournament.result'=>'required|string|max:200',
            'tournament.points'=>'required|integer',
            //
        ];
    }
}
