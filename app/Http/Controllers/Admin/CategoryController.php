<?php

namespace App\Http\Controllers\Admin;

// Los use equivalen a los import de javascript, es una forma de traer
// otros archivos que contienen código a este archivo
use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{


    protected $category;


    public function __construct(Category $category)
    {
        $this->category = $category; 
    }
    
    public function index()
    {

        $view = View::make('admin.pages.categorys.index')
                ->with('category', $this->category)
                ->with('categorys', $this->category->where('active', 1)->get());

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

       $view = View::make('admin.pages.categorys.index')
        ->with('category', $this->category)
        ->renderSections();
        debugbar::info($view['form']);

        /*
            En la siguiente línea estamos devolviendo una respuesta a la petición AJAX, una petición AJAX hará que una parte de la página
            se actualice sin necesidad de recargar toda la página. En este caso, la parte que se actualizará es la parte del formulario. Para
            ello estamos diciendo que la palabra "form" será equivalente a $view['form'], la cual contiene el html del formulario ya actualizado.
        */

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(CategoryRequest $request)
    {            
        

        $category = $this->category->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'description' => request('description'),
                'specifications' => request('specifications'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('admin.pages.categorys.index')
        ->with('categorys', $this->category->where('active', 1)->get())
        ->with('category', $category)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $category->id,
        ]);
    }

    public function edit(Category $category)
    {
        debugbar::info($category);

        $view = View::make('admin.pages.categorys.index')
        ->with('category', $category)
        ->with('categorys', $this->category->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Category $category){

    }

    public function destroy(Category $category)
    {
        $category->active = 0;
        $category->save();

        $view = View::make('admin.pages.categorys.index')
            ->with('category', $this->category)
            ->with('categorys', $this->category->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}

