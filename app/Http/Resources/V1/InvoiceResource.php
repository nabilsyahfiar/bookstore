<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      return
      [
        'id' => $this->id,
        'customer_id' => $this->customer_id,
        'book_id' => $this->book_id,
        'amount' => $this->amount,
        'shipping_method_id' => $this->shipping_method_id
      ];
    }
}
