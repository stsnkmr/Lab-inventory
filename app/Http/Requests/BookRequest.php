<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|regex:[0-9\-]{9,16}[0-9X]',
            'publisher' => 'required',
            'release_date' => 'required',
            'imgURL' => 'nullable|url',
            'amazonURL' => 'nullable|url',
        ];
    }
}
