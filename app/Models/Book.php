<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'isbn13',
      'language_id',
      'pages',
      'publication_date',
      'publisher_id'
    ];

    public function bookAuthor()
    {
        return $this->hasMany(BookAuthor::class);
    }
}
