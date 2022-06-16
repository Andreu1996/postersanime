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

    public function store(Cart $cart)
    {

        $cart->add(request('product_id'), request('quantity'));

         for ( $i = 0; $i < 10; $i ++ ) {

            $this->price->create([
                'product_id' => request('id'),
                'price' => request('price_id'),
                'client' => null,
                'fingerprint' => null,
                'product_name' => $product->name,
            ]);
            
        } 
        

        $sections = $view::make('front.pages.cart.index')->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);

    }
    
}

