<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeasmcp_1001_useridRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // engga terlalu penting, karena data id1001 dan id sudah di generated oleh sistemnya

        ];
    }
}
