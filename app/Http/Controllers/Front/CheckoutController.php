<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
// traer todos los modelos a este checkout
// clientes, ventas(payment_method, customer_id), carrito (actualizar todos los elementos que ha comprado los elementos con un $venta_id)
use App\Models\Cart;
use App\Models\Sale;
use App\Models\Client;
use Request;
use DB;

class CheckoutController extends Controller
{
    
    protected $cart;
    protected $sale;
    protected $client;

    public function __construct(Cart $cart, Sale $sale, Client $client)
    {
        $this->cart = $cart;
        $this->sale = $sale;
        $this->client = $client;

    }

    public function index($fingerprint)
    {

        $totals = $this->cart
            ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sale_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();

        $view = View::make('front.pages.checkout.index')
            ->with('fingerprint', $fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total);

        $sections = $view->renderSections(); 

        return response()->json([
            'content' => $sections['content'],
        ]);

            
        return $view;
    }

    public function get(Request $request)
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
    }

    public function store(Request $request)       
    {         
        
        $client = $this->client->create([
            'name' => request('name'),
            'lastname' => request('lastname'),
            'postal_code' => request('postal_code'),
            'country' => request('country'),
            'adress' => request('adress'),
            'city' => request('city'),
            'state' => request('state'),
            'phone' => request('phone'),
            'email' => request('email'),
        ]);

        $ticked_number = $this->sale->latest()->first()->ticked_number;

        if ($ticked_number == null) {
            $ticked_number = date('Ymd') . '0001';
        }
        else {
           $ticked_number += 1;
        }

        $sale = $this->sale->create([
            'ticked_number' => $ticked_number,
            'customer_id' => $client->id,
            'date_emision' => date('Y-m-d'),
            'total_price_base' => request('base_total'),
            'total_price_tax' => request('tax_total'),
            'total_price' => request('total'),
            'payment_method_id' => request('payment_method_id'),
        ]);

        $cart = $this->cart
        ->where('fingerprint', request('fingerprint'))
        ->where('sale_id', null)
        ->where('active', 1)
        ->update([
            'sale_id' => $sale->id,
            'client_id' => $client->id,
        ]);

        $sections = View::make('front.pages.sale.index')->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    
}

