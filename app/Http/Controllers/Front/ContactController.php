<?php

namespace App\Http\Controllers\Front;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Front\ContactRequest;

class ContactController extends Controller
{

    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact; 
    }
    
    public function index()
    {

        $view = View::make('front.pages.contacto.index');
        
        if(request()->ajax()) {
    
            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]);

        }
        
        return $view;
    }


    public function store(ContactRequest $request)
    {            
        

        $contact = $this->contact->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'lastname' => request('lastname'),
                'phone' => request('phone'),
                'email' => request('email'),
                'text' => request('text'),
        ]);
            
        $view = View::make('front.pages.contacto.index')->renderSections();        

    }

    

 

    
}

