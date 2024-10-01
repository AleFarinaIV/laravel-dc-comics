<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
        ];
    }

    public function messages() {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title must be a maximum of 50 characters.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
            'thumb.required' => 'The thumbnail field is required.',
            'thumb.url' => 'The thumbnail must be a valid URL.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a numeric value.',
            'series.required' => 'The series field is required.',
        ];
    }
}
