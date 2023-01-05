<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
      $method = $this->method();

      if ($method == 'PUT') {
        return [
          'title' => ['required'],
          'isbn13' => ['required'],
          'language_id' => ['required'],
          'pages' => ['required'],
          'publication_date' => ['required'],
          'publisher_id' => ['required']
        ];
      } else {
        return [
          'title' => ['sometimes', 'required'],
          'isbn13' => ['sometimes', 'required'],
          'language_id' => ['sometimes', 'required'],
          'pages' => ['sometimes', 'required'],
          'publication_date' => ['sometimes', 'required'],
          'publisher_id' => ['sometimes', 'required']
        ];
      }
    }
}
