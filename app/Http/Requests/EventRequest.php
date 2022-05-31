<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'places' => 'required|numeric|min:1',
            'description' => 'required|string|min:32|max:8192',
            'start_at' => 'required|date'
        ];
    }
}
