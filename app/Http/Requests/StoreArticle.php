<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
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
        $unique = $this->method() == "PUT" ? "" : "|unique:articles";

        return [
            'title' => 'required|string|min:5|max:35' . $unique,
            'subtitle' => 'required|string|min:5|max:60',
            'description' => 'required|string|min:15|max:300',
            'body' => 'required|string|min:100|max:12000'
        ];
    }
}
