<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
      'customer_id',
      'book_id',
      'amount',
      'shipping_method_id',
      'order_date'
    ];
    
}
