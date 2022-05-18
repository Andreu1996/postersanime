
@extends('admin.layout.master')

@section('title') Admin panel @endsection
@section('description') Admin panel de la pagina web @endsection


@section('content')

    @if($agent->isDesktop())
        <div class="page-section">
            @include('admin.pages.admin-panel.desktop.admin-panel')
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include('admin.pages.admin-panel.mobile.admin-panel')
        </div>
    @endif

    

@endsection
