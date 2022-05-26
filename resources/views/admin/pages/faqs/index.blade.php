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
            <th class="text-center">Creado</th>
            <th class="new-form">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17,13H13V17H11V13H7V11H11V7H13V11H17M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z" />
                </svg>
            </th>
        </tr>
    </thead>

    
    <tbody class="table-hover">
        @if(isset($faqs))
            @foreach($faqs as $faq_element)
                <tr>
                    <td class="text-center">{{$faq_element->id}}</td>
                    <td class="text-left">{{$faq_element->name}}</td>
                    <td class="text-left">{{$faq_element->created_at}}</td>                   
                    <td>
                        <div class="edit-remove-buttons">
                            <div class="edit-button" data-url="{{route('faqs_edit', ['faq' => $faq_element->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </div>
                            <div class="remove-button" data-url="{{route('faqs_destroy', ['faq' => $faq_element->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </div>
                        </div>
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
         --}}

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
        </div>
    </tbody>

    
</table>

@endsection

@section('form')

    @if(isset($faq))

        <form class="admin-form" action="{{route("faqs_store")}}">

            <input type="hidden" name="id">

            <div class="sidetable table-container sidetablehide">

                <div class="container">

                    <div class="user-edit-header">
                        @include('admin.components.desktop.form-header')
                    </div>
                    

                    <div class="user-edit-tabs">

                    <div class="container--content">

                        <div class="content content--active" data-tab="tab1">
                            <div class="sidetableContact">
                                <div class="desktop-two-columns">

                                    <div class="column">
                                        <div class="name">
                                            <div class="form-label">
                                                <h3>Nombre</h3>
                                            </div>
                                            <div class="form-input">
                                                <input name="name" type="text" placeholder="Nombre" value="{{isset($faq->name) ? $faq->name: ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label">
                                                <h3>Titulo</h3>
                                            </div>
                                            <div class="form-input">
                                                <input name="title" type="text" placeholder="Titulo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label">
                                                <h3>Descripción</h3>
                                            </div>
                                            <div class="form-input">
                                                <textarea name="description" class="ckeditor"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div class="content" data-tab="tab2">

                            <div class="desktop-two-columns">
                                <div class="column">
                                    <div class="image-selector">
                                        <div class="image-selector-title">
                                            <h3>Seleccionar Imagen</h3>
                                        </div>
                                        <div class="image-preview-delete">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
                                            </svg>
                                        </div>
                                        <label class="file-input">
                                        <div id="image-preview">
                                            <svg class="image-preview-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                            <img class="image-preview-element" id="image-preview-element" src="">
                                        </div>                                             
                                        <input type="file" name="image-featured" class="choose-file" accept="image/*" >
                                    </div>  
                                </div> 
                                <div class="column">
                                    <div class="image-selector">
                                        <div class="image-selector-title">
                                            <h3>Seleccionar Imagen</h3>
                                        </div>
                                        <div class="image-preview-delete">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
                                            </svg>
                                        </div>
                                        <label class="file-input">
                                        <div id="image-preview">
                                            <svg class="image-preview-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                            <img class="image-preview-element" id="image-preview-element" src="">

                                        </div>                                             
                                        <input type="file" name="image-featured" class="choose-file" accept="image/*" >
                                        
                                    </div> 
                                    
                                </div> 
                            </div>  
                            
                        </div>


                        <div class="content" data-tab="tab3">
                            Contenido
                        </div>
                    </div>
                    </div> 

                </div>

            </div> 

    
        </form>
    @endif

@endsection