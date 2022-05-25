@extends('admin.layout.table_form')

@section('title')
    <div class="page-title-text">
        <h1>FAQS</h1>
    </div>
@endsection

@section('filter')

<div class="desktop-one-column">
    <div class="column">

        <div class="dropdown-menu">
            <div class="dropdown-menu-content">
                <div class="dropdown-menu-content-header">
                    <h3>categorias</h3>
                </div>
        
                <div class="dropdown-menu-content-body">
                    <select class="dropdown-menu-content-categories">
                        <option>FAQS</option>
                        <option>Users</option>
                        <option>Products</option>
                        <option>Clients</option>
                        <option>Sells</option>
                    </select>
                </div>
        
            </div>
            <div class="dropdown-menu-svg">
                <div class="filter-svg">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 11L16.76 3.62A1 1 0 0 0 16.59 2.22A1 1 0 0 0 16 2H2A1 1 0 0 0 1.38 2.22A1 1 0 0 0 1.21 3.62L7 11V16.87A1 1 0 0 0 7.29 17.7L9.29 19.7A1 1 0 0 0 10.7 19.7A1 1 0 0 0 11 18.87V11M13 16L18 21L23 16Z" />
                    </svg>
                </div>
            </div>          
        </div>
    </div>
</div>

@endsection

{{-- @section('table')
    @if(isset($faqs))
        @foreach($faqs as $faq)
            <div class="table-row swipe-element">
                <div class="table-field-container swipe-front">
                    <div class="table-field"><p><span>Id:</span>{{$faq_element->id}}</p></div>
                    <div class="table-field"><p><span>Nombre:</span> {{$faq_element->name}}</p></div>
                    <div class="table-field"><p><span>Email:</span> {{$faq_element->email}}</p></div>
                    <div class="table-field"><p><span>Creado el:</span>{{$faq_element->created_at}}</p></div>
                </div>

                <div class="table-icons-container swipe-back">
                    <div class="table-icons edit-button right-swipe">
                        <svg viewBox="0 0 24 24">
                            <path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                        </svg>
                    </div>

                    <div class="table-icons delete-button left-swipe">
                        <svg viewBox="0 0 24 24">
                            <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection --}}

@section('table')

<table class="tablefill">
              
    <thead>
        <tr>
            <th class="text-center first-column">ID</th>
            <th class="text-center">Nombre</th>
            <th class="text-center column-hide mobile-hide">Creado</th>
        </tr>
    </thead>

    
    <tbody class="table-hover">
        @if(isset($faqs))
            @foreach($faqs as $faq_element)
                <tr>
                    <td class="text-center">{{$faq_element->id}}</td>
                    <td class="text-left">{{$faq_element->name}}</td>
                    <td class="text-left column-hide">{{$faq_element->created_at}}</td>                   
                    <td>
                        @include('admin.components.desktop.edit-remove-user') 
                    </td>                               
                </tr>
            @endforeach
        @endif
        {{-- <tr>
            <td class="text-center">002</td>
            <td class="text-left">ToniiGar</td>
            <td class="text-left column-hide mobile-hide">toniigar@gmail.com</td>
            <td class="text-left column-hide mobile-hide">633549721</td>
            <td>
                @include('admin.components.desktop.edit-remove-user')                              
            </td>
        </tr>
        <tr>
            <td class="text-center">003</td>
            <td class="text-left">yotajota</td>
            <td class="text-left column-hide mobile-hide">jotajota-yota@gmail.com</td>
            <td class="text-left column-hide mobile-hide">971548216</td>
            <td>
                @include('admin.components.desktop.edit-remove-user')                              
            </td>
        </tr>
        <tr>
            <td class="text-center">004</td>
            <td class="text-left">Holly-Spirit-year0</td>
            <td class="text-left column-hide mobile-hide">thechrist-god@gmail.com</td>
            <td class="text-left column-hide mobile-hide">668264912</td>
            <td>
                @include('admin.components.desktop.edit-remove-user')                                               
            </td>
        </tr>
        <tr>
            <td class="text-center">005</td>
            <td class="text-left">mamma.letmedie</td>
            <td class="text-left column-hide mobile-hide">sebastianzapaterogonzalez@gmail.com</td>
            <td class="text-left column-hide mobile-hide">680264953</td>
            <td>
                @include('admin.components.desktop.edit-remove-user')                
            </td>
        </tr> 

     <div class="remove-confirmation">
            <div class="remove-confirmation-content">
                <div class="remove-confirmation-title">
                    <h3>¿Eliminar usuario?</h3>
                </div>
                <div class="remove-confirmation-buttons">
                    <div class="remove-confirmation-delete">
                        <button class="remove-confirmation-button">Eliminar</button>
                    </div>
                    <div class="remove-confirmation-cancel">
                        <button class="remove-confirmation-button">Cancelar</button>
                    </div>         
                </div>
            </div>
        </div> --}}
    </tbody>

    
</table>

@endsection

@section('form')

<form class="admin-form" action="{{route("faqs_store")}}">
    <div class="sidetable table-container ">
        {{-- sidetablehide --}}

        <div class="container">

            <div class="user-edit-header">
                @include('admin.components.desktop.form-header')
            </div>
            

            <div class="user-edit-tabs">
                @include('admin.components.desktop.form-tabs-content')
            </div> 

        </div>

    </div> 
</form>

@endsection