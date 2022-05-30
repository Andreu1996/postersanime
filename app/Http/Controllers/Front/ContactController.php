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

        $view = View::make('front.pages.contacts.index')
                ->with('contact', $this->contact)
                ->with('contacts', $this->contact->get());

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


       $view = View::make('front.pages.contacts.index')
        ->with('contact', $this->contact)
        ->renderSections();
        debugbar::info($view['form']);

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ContactRequest $request)
    {            
        

        $contact = $this->contact->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'title' => request('title'),
                'email' => request('email'),
                'mobile' => request('mobile'),
                'message' => request('message'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('front.pages.contacts.index')
        ->with('contacts', $this->contact->where('active', 1)->get())
        ->with('contact', $contact)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $contact->id,
        ]);
    }

    public function edit(Contact $contact)
    {
        debugbar::info($contact);

        $view = View::make('front.pages.contacts.index')
        ->with('contact', $contact)
        ->with('contacts', $this->contact->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Contact $contact){

    }

    public function destroy(Contact $contact)
    {
        $contact->active = 0;
        $contact->save();

        $view = View::make('front.pages.contacts.index')
            ->with('contact', $this->contact)
            ->with('contacts', $this->contact->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}

