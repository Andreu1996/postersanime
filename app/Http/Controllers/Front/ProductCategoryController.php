<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    protected $category;

    // esta variable tiene que coincidir con la ruta
    public function __construct(ProductCategory $product_category)
    {
        $this->product_category = $product_category;
    }

    // esta funcion se llama en las rutas (App\Http\Controllers\Front\ProductCategoryController@category)
public function show(ProductCategory $category)
{
    // use debugbar to get the category_id
    debugbar::info($category->id);

    $view = View::make('front.pages.productos.index')
    ->with('category', $category)
    ->with('products', $category->products->where('visible', 1));

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


}


