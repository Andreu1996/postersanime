<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">


        <title>@yield('title')</title>
		<meta name="description" content=@yield('description')>
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        @include('admin.layout.partials.styles')

    </head>

    <body>
        
        <main>

            @include('admin.layout.partials.header')
            
            <div class="call-title">
                @yield('title')
            </div>


            <div class="call-content">
                @yield('content')
            </div>

        </main>

        
            
        @include("admin.layout.partials.scripts")  

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Ubuntu:700,700i', 'Ubuntu+Condensed:400']
                }
            });        
        </script>

    </body>

</html>