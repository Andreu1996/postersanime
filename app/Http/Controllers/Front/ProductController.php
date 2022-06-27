<?php

// indica a php donde se encuentra este archivo
namespace App\Http\Controllers\Front;

// el namespace es necesario para utilizar el use
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

// permite extender desde el controller
class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    // aqui estamos llamando a todos los elementos de la tabla product
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

    // en el show, edit y destroy tenemos que usar el id del producto al cual queremos afectar
    public function show(Product $product)
    {

        $view = View::make('front.pages.producto.index')->with('product', $product);
        
        // si la llamada viene de javascript(ajax - asincronic javascript and xml) ejecuta lo siguiente
        if(request()->ajax()) {
    
            // ejecuta la funcion renderSection indicada en el javascript
            $sections = $view->renderSections(); 

            // devuelve como un json al contenido y lo sustituye en el html. el cambio lo indicamos en el javascript (then(json => {)
            return response()->json([
                'content' => $sections['content'],
            ]);
            
        }
            
        return $view;

    }

    public function filter($filter)
	{
		$products = $this->product
		->join('prices', 'products.id', '=', 'prices.product_id')
		->where('products.active', 1)
		->where('products.visible',1)
        ->where('prices.active', 1)
        ->where('prices.valid', 1)
		->orderBy('prices.base_price', $filter)
		->get();

		$view = View::make('front.pages.productos.index')
		->with('products', $products);

		if(request()->ajax()) {
                
			$sections = $view->renderSections(); 
	
			return response()->json([
				'content' => $sections['content'],
			]);
	
		}
		
		return $view;
    }
        
}

    
    

