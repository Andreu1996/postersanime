@extends('admin.layout.table_form')

@section('title')
    <div class="page-title-text">
        <h1>Products</h1>
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
        @if(isset($product_categories))
            @foreach($product_categories as $product_category_element)
                <tr>
                    <td class="text-center">{{$product_category_element->id}}</td>
                    <td class="text-left">{{$product_category_element->name}}</td>
                    <td class="text-left">{{$product_category_element->created_at}}</td>                   
                    <td>
                        <div class="edit-remove-buttons">
                            <div class="edit-button" data-url="{{route('product_categories_edit', ['product_category' => $product_category_element->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </div>
                            <div class="remove-button" data-url="{{route('product_categories_destroy', ['product_category' => $product_category_element->id])}}">
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
    </tbody>
        
     <div class="remove-confirmation">
            <div class="remove-confirmation-content">
                <div class="remove-confirmation-title">
                    <h3>¿Eliminar Campo?</h3>
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

    @if(isset($product_category))

        <form class="admin-form" action="{{route("product_categories_store")}}">

            <input type="hidden" name="id">

            <div class="sidetable table-container sidetablehide">
                {{--  --}}

                <div class="container">

                    <div class="sidetable-header">

                        <ul class="container--tabs">
                            <li class="tab tabs--active desktop-only" data-tab="tab1">Contacto</li>
                            <li class="tab desktop-only" data-tab="tab2">Imagenes</li>
                            <li class="tab desktop-only" data-tab="tab3">Seo</li>
                        </ul>

                        <div class="sidetable-header-options">
                    
                            <div class="sidetable-header-element">
                                <div class="sidetableHeaderSave">

                                    <div class="sidetable-header-svg store-button">
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                        </svg>
                                    </div>

                                    <div class="pop-up-save">
                                        <div class="pop-up-save-element">
                                            <a class="pop-up-save-svg">
                                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                                </svg>
                                            </a>   
                                        </div>
                                        <div class="pop-up-save-element">
                                            <div class="pop-up-save-text">
                                                <p>Usuario guardado con exito</p>
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                            </div>
                    
                            <div class="sidetable-header-element">     
                                <div class="sidetable-header-clean">
                                    <div class="sidetable-header-svg create-button" data-url="{{route('product_categories_create')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                                            <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="sidetable-header-element">        
                                <div class="sidetable-header-onoff">
                                    <div class="containerButton">
                                        <label class="btn-onoff ">
                                            <input type="checkbox" name="visible" id="input-on-off" checked><span></span>	
                                        </label>
                                    </div>
                                </div>
                            </div> 
                    
                            <div class="sidetable-header-element">        
                                <div class="sidetable-header-close">
                                    <div class="sidetabe-header-close-svg">
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    

                    <div class="user-edit-tabs">

                        <div class="container--content">

                            <div class="content content--active" data-tab="tab1">
                                <div class="sidetableContact">
                                    
                                    <div class="desktop-two-columns">
                                        <div class="column">
                                            <div class="form-group">
                                                <div class="form-label">
                                                    <h3>Nombre</h3>
                                                </div>
                                                <div class="form-input">
                                                    <input name="name" type="text" placeholder="Nombre" value="{{isset($product_category->name) ? $product_category->name: ''}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="form-group">
                                                <div class="form-label">
                                                    <h3>Titulo</h3>
                                                </div>
                                                <div class="form-input">
                                                    <input name="title" type="text" placeholder="Titulo" value="{{isset($product_category->title) ? $product_category->title: ''}}">
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