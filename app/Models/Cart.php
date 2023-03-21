<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_img',
        'product_name',
        'product_price',
        'amount',
        'id_size',
        'id_toping',
    ];

}
