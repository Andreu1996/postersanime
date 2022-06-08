<?php


namespace App\Http\ViewComposers\Admin;

use Illuminate\View\View;
// llamamos al model ProductCategory
use App\Models\ProductCategory;

// esta clase tiene que ser el mismo nombre que el archivo donde estamos
class ProductCategories
{
    // static sirve para indicar que la variable no va a cambiar y que no va a ser instanciada en el constructor
    static $composed;

    // instanciamos el objeto mediante inyeccion de dependencias
    public function __construct(ProductCategory $product_categories)
    {
        $this->product_categories = $product_categories;
    }

    public function compose(View $view)
    {

        if(static::$composed)
        {
            return $view->with('product_categories', static::$composed);
        }

        static::$composed = $this->product_categories->where('active', 1)->orderBy('title', 'asc')->get();

        // le pasas a la vista una variable que a partir de este momento se llamara product_categories
        $view->with('product_categories', static::$composed);

    }
}