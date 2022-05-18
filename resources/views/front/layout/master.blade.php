<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">


        <title>@yield('title')</title>
		<meta name="description" content=@yield('description')>
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">


        @include('front.layout.partials.styles')

    </head>

    <body>

        @include('front.layout.partials.header')
        
        <main>

            <div>
                @yield('content')
            </div>

        </main>

        <footer>
            @include('front.layout.partials.footer')
        </footer>

        
            
        @include("front.layout.partials.scripts")  

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
