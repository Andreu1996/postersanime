<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            // la primera linea indica en que vista quiero tener disponible la el contenido de la segunda linea, si separamos por comas y ponemos otras rutas utilizaremos esta misma variable en otras vistas
            'admin.pages.products.index', 'front.pages.productos.index'],
            // en la segunda linea indica que archivo va a ser la que haga la consulta a la base de datos
            'App\Http\ViewComposers\Admin\ProductCategories'
        );
        // si queremos usar otra variable copiamos lo de arriba y le cambiamos los nombres a las rutas y al ViewComposer
    }
}
