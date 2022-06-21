<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;use 
App\Models\client;
use DB;

class CheckoutController extends Controller
{
    
    public function index()
    {
        $view = View::make('front.pages.checkout.index');

        if(request()->ajax()) {
    
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);

        }
            
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
    
}

