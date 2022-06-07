@extends('front.layout.master')

@section('title') Producto @endsection
@section('description') Producto de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.pages.producto.desktop.producto', ['product' => $product]);
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.pages.producto.mobile.producto', ['product' => $product]);
        </div>
    @endif

@endsection