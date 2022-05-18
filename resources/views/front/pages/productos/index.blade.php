@extends('front.layout.master')

@section('title') Productos @endsection
@section('description') Productos de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.pages.productos.desktop.productos')
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.pages.productos.mobile.productos')
        </div>
    @endif

@endsection
