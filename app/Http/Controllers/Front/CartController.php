<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;  
use App\Models\Cart;
use DB;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    
    public function index()
    {
        $view = View::make('front.pages.cart.index');

        if (request()->ajax()) {

            $section = $view->renderSection();
            return response()->json([
                'content' => $section['content']
            ]);
        }

        return $view;
    }

    public function store(Request $request)
    {

         for ( $i = 0; $i < request('quantity'); $i ++ ) {

            $cart = $this->cart->create([
                'id' => request('id'),
                'price_id' => request('price_id'),
                'fingerprint' => '1',
                'active' => 1
            ]);
            
        }  

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')   
            ->groupByRaw('price_id')
            ->where('fingerprint',1) 
            ->get();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);

        Debugbar::info($view);
        Debugbar::info($sections);
    }

    // public function addProduct(price $fingerprint)
    // {
    //     $addCarts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')   
    //         ->groupByRaw('price_id')
    //         ->where('fingerprint',1) 
    //         ->get();
    // }
    
}

