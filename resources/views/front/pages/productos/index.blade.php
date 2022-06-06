@extends('front.layout.master')

@section('title') Productos @endsection
@section('description') Productos de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.pages.productos.desktop.productos', ['products' => $products])
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.pages.productos.mobile.productos', ['products' => $products])
        </div>
    @endif

@endsection
