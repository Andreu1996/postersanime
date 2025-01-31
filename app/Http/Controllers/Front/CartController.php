<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Request;

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
            ->where('active', 1)
            ->where('sale_id', null)
            ->where('fingerprint', $cart->fingerprint) 
            ->get();

        $totals = $this->cart
            ->where('carts.fingerprint', $cart->fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sale_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $cart->fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();
    

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function pluscart($fingerprint, $price_id)
    {

        $cart = $this->cart->create([
            'price_id' =>  $price_id,
            'fingerprint' => $fingerprint,
            'active' => 1
        ]);
        
        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')   
            ->groupByRaw('price_id')
            ->where('active', 1)
            ->where('sale_id', null)
            ->where('fingerprint', $fingerprint) 
            ->get();

        $totals = $this->cart
            ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sale_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function minuscart($fingerprint, $price_id)
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

        $totals = $this->cart
            ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sale_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();



        return response()->json([
            'content' => $sections['content'],
        ]);
    }
    
}

