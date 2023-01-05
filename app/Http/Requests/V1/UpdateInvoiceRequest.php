<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInvoiceRequest extends FormRequest
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
          'customer_id' => ['required'],
          'book_id' => ['required'],
          'amount' => ['required'],
          'shipping_method_id' => ['required'],
          'order_date' => ['required']
        ];
      } else {
        return [
          'customer_id' => ['sometimes', 'required'],
          'book_id' => ['sometimes', 'required'],
          'amount' => ['sometimes', 'required'],
          'shipping_method_id' => ['sometimes', 'required'],
          'order_date' => ['sometimes', 'required']
        ];
      }
    }
}
