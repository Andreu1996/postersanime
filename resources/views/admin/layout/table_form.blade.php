@extends('admin.layout.master')

@section('content')

    <div class="filter">
        @yield('filter')
    </div>

    <div class="table" id="table">
        @yield('table')
    </div>

    <div class="form" id="form">
        @yield('form')
    </div>

@endsection

