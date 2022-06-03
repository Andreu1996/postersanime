<?php

namespace App\Http\Controllers\Admin;

use Debugbar;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Http\Requests\Admin\ClientRequest;

class ClientController extends Controller
{

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client; 
    }
    
    public function index()
    {

        $view = View::make('admin.pages.clients.index')
                ->with('client', $this->client)
                ->with('clients', $this->client->get());

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


       $view = View::make('admin.pages.clients.index')
        ->with('client', $this->client)
        ->renderSections();
        debugbar::info($view['form']);

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ClientRequest $request)
    {            
        

        $client = $this->client->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'lastname' => request('lastname'),
                'postal_code' => request('postal_code'),
                'country' => request('country'),
                'adress' => request('adress'),
                'city' => request('city'),
                'state' => request('state'),
                'phone' => request('phone'),
                'email' => request('email'),
                'active' => 1,
        ]);
            
        $view = View::make('admin.pages.clients.index')
        ->with('clients', $this->client->where('active', 1)->get())
        ->with('client', $client)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $client->id,
        ]);
    }

    public function edit(Client $client)
    {
        debugbar::info($client);

        $view = View::make('admin.pages.clients.index')
        ->with('client', $client)
        ->with('clients', $this->client->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Client $client){

    }

    public function destroy(Client $client)
    {
        $client->active = 0;
        $client->save();

        $view = View::make('admin.pages.clients.index')
            ->with('client', $this->client)
            ->with('clients', $this->client->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}

