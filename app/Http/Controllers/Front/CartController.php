<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    
    public function index()
    {
        $view = View::make('front.pages.cart.index');

        return $view;
    }
    
}

