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

        // $cartsSum = $this->cart->select(DB::raw('sum(price) as total'))   
        //     ->where('fingerprint',1) 
        //     ->get();

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

    public function addProduct ($fingerprint, $price_id)
    {

        $cart = $this->cart->create([
            'id' => request('id'),
            'price_id' => request('price_id'),
            'fingerprint' => 1,
            'active' => 1,
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->where('active',1)
            ->where('fingerprint',1)
            ->groupByRaw('price_id')->get();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->renderSections();


        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function removeProduct ($fingerprint, $price_id)
    {

        $product = $this->cart
            ->where('active',1)
            ->where('fingerprint', $fingerprint)
            ->where('price_id', $price_id)
            ->first();

        $product->active = 0;
        $product->save();



        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->where('active',1)
            ->where('fingerprint',1)
            ->groupByRaw('price_id')->get();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->renderSections();


        return response()->json([
            'content' => $sections['content'],
        ]);
    }
    
}

