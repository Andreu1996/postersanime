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

@section('table')

<table class="tablefill">
              
    <thead>
        <tr>
            <th class="text-center first-column">User ID</th>
            <th class="text-center">User Name</th>
            <th class="text-center column-hide mobile-hide">Mail</th>
            <th class="text-center column-hide mobile-hide">Movile</th>
            <th class="text-center last-column">more</th>
        </tr>
    </thead>

    
    <tbody class="table-hover">
        <tr>
            <td class="text-center">001</td>
            <td class="text-left">JoanKilito_19</td>
            <td class="text-left column-hide mobile-hide">Joan.Kilo@gmail.com</td>
            <td class="text-left column-hide mobile-hide">688523114</td>
            
            <td>
                @include('admin.components.desktop.edit-remove-user') 
            </td>                               
        </tr>
        <tr>
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
        </div>
    </tbody>

    
</table>

@endsection

@section('form')

<form>
    <div class="sidetable sidetablehide">

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