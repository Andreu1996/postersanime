@extends('front.layout.master')

@section('title') Posters anime @endsection
@section('description') Posters anime de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.pages.index.desktop.index')
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.pages.index.mobile.index')
        </div>
    @endif 

@endsection

