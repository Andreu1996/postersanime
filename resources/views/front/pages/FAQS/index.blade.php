@extends('front.layout.master')

@section('title') Preguntas frecuentes @endsection
@section('description') Preguntas frecuentes de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.components.desktop.page-title', ['title' => "FAQS"])
            @include('front.pages.FAQS.desktop.FAQS')
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.pages.FAQS.mobile.FAQS')
        </div>
    @endif

@endsection
