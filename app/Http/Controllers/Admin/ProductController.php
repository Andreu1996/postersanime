<?php

namespace App\Http\Controllers\Admin;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

// esto llama al modelo
use App\Models\Product;

use App\Http\Requests\Admin\ProductRequest;

class ProductController extends Controller
{

    // protected es una variable que solo puede ser usada en esta clase, que no se pueda usar en el exterior 
    protected $product;


// por cada modelo indicado arriba se instancia en el constructor, para que se pueda usar en el controlador

    public function __construct(Product $product)
    {
        // aqui indicamos un nombre para nuestro modelo
        $this->product = $product;
    }
    
    public function index()
    {

        $view = View::make('admin.pages.products.index')
        // indicamos un nombre que utilizaremos en el html que indicara el nombre de la tabla que estamos trabajando
                ->with('product', $this->product)
                ->with('products', $this->product->where('active', 1)->get());


        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }

    public function create()
    {


       $view = View::make('admin.pages.products.index')
        ->with('product', $this->product)
        ->renderSections();
        debugbar::info($view['form']);

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ProductRequest $request)
    {            
        

        $product = $this->product->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'description' => request('description'),
                'caracteristics' => request('caracteristics'),
                'price' => request('price'),
                'category_id' => request('category_id'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('admin.pages.products.index')
        ->with('products', $this->product->where('active', 1)->get())
        ->with('product', $product)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $product->id,
        ]);
    }

    public function edit(Product $product)
    {
        debugbar::info($product);

        $view = View::make('admin.pages.products.index')
        ->with('product', $product)
        ->with('products', $this->product->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Product $product){

    }

    public function destroy(Product $product)
    {
        $product->active = 0;
        $product->save();

        $view = View::make('admin.pages.products.index')
            ->with('product', $this->product)
            ->with('products', $this->product->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}

