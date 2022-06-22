@extends('front.layout.master')

@section('title') checkout @endsection
@section('description') Checkout de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.pages.sale.desktop.sale')
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.pages.sale.mobile.sale')
        </div>
    @endif

@endsection

