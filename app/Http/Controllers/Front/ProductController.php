<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        

        $view = View::make('front.pages.productos.index')
        ->with('products', $this->product->where('active', 1)->where('visible', 1)->get());
        
        if(request()->ajax()) {
    
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);

        }
            
        return $view;

        
    }

    public function show(Product $product)
    {

        $view = View::make('front.pages.producto.index')->with('product', $product);
        
        if(request()->ajax()) {
    
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);
            
        }
            
        return $view;

    }
    
}