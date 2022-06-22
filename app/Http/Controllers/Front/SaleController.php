<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
// traer todos los modelos a este checkout
// clientes, ventas(payment_method, customer_id), carrito (actualizar todos los elementos que ha comprado los elementos con un $venta_id)

class SaleController extends Controller
{
    
    public function index()
    {
        $view = View::make('front.pages.sale.index');

        if(request()->ajax()) {
    
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);

        }
            
        return $view;
    } 
    
}

