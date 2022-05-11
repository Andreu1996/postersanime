{{-- @if($agent->isDesktop())
    <script src="{{mix('front/desktop/js/app.css')}}"></script>
@endif

@if($agent->isMobile())
    <script src="{{mix('front/mobile/js/app-mobile.css')}}"></script>
@endif --}}


<script src={{mix('/front/mobile/js/app-mobile.js')}}></script>