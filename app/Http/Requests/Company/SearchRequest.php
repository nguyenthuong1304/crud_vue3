<?php

namespace App\Http\Requests\Company;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'nullable',
            'email' => 'nullable',
            'address' => 'nullable',
            'website' => 'nullable',
            'created_from' => 'nullable|date',
            'created_to' => 'nullable|date'
        ];
    }
}
