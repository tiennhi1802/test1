<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class HeaderCart extends Controller
{
    private $cart;
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    // public function
}
