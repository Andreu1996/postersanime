<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function index()
    {
        $view = View::make('front.pages.index.index');

        if(request()->ajax()) {
    
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);

        }

        return $view;
    }

    
}

