<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
        'title' => $this->title,
        'isbn13' => $this->isbn13,
        'language_id' => $this->language_id,
        'publication_date' => $this->publication_date,
        'pages' => $this->pages,
        'publisher_id' => $this->publisher_id
      ];
    }
}
