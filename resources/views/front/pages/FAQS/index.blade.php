@extends('front.layout.master')

@section('title') Preguntas frecuentes @endsection
@section('description') Preguntas frecuentes de la pagina web @endsection

@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('front.components.desktop.page-title', ['title' => "FAQS"])
            @include('front.pages.faqs.desktop.faqs', ['faqs' => $faqs])
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('front.components.mobile.page-title', ['title' => "FAQS"])
            @include('front.pages.faqs.mobile.faqs', ['faqs' => $faqs])

        </div>
    @endif

@endsection
