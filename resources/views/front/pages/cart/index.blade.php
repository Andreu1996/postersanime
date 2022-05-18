@extends('front.layout.master')

@section('title') carrito @endsection
@section('description') carrito de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.components.desktop.page-title', ['title' => "Carrito"])
            @include('front.pages.cart.desktop.cart')
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.pages.cart.mobile.cart')
        </div>
    @endif

@endsection