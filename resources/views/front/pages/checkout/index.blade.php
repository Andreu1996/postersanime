@extends('front.layout.master')

@section('title') checkout @endsection
@section('description') Checkout de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.components.desktop.page-title', ['title' => "checkout"])
            @include('front.pages.checkout.desktop.checkout')
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.pages.checkout.mobile.checkout')
        </div>
    @endif

@endsection

