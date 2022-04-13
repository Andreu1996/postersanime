{{-- <!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">


        <title>Título</title>
		<meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">

        <link rel="stylesheet" href="style/normalize.css" >
        <link rel="stylesheet" href="{{mix('front/desktop/css/app.css')}}" >

    </head> --}}

    {{-- <body> --}}

     @extends('front.layout.master')

     @section('content')
        <nav class="navbar">
            <div  class="nav-sub">
                <div class="menu-mobile mobile-only">
                    <div class="menu_element-mobile">
                        <h1><a href="index.html">inicio</a></h1>
                    </div>
    
                    <div class="menu_element-mobile">
                        <h1><a href="productos.html">productos</a></h1>
                    </div>
    
                    <div class="menu_element-mobile">
                        <h1>servicios</h1>          
                    </div>
    
                    <div class="menu_element-mobile">
                        <h1><a href="contacto.html">contacto</a></h1>
                    </div>
                </div>
            </div>
        </nav>

        <main>

            <div>
                <div class="slider">
                    <div class="slider-image">
                        <img src="images/1.jpg" alt="changeimage" title="chango"/>
                        
                        <div class="slider-text-title">
                            <h2>epic wallpaper</h2>
                        </div>

                        <div class="slider-text-subtext">
                            <p>buy now</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="featured">
                <div class="featured-title">
                    <h1>compra poster y descarga wallpapers</h1>
                </div>

                <div class="featured-elements">
                    <div class="featured-element">
                        <div class="featured-element-image">
                            <a href="https://wall.alphacoders.com/by_category.php?id=3&name=Anime+Fondos+de+pantalla&lang=Spanish"><img src="images/wallpaper.jpg"></a>
                        </div>
                        <div class="featured-element-text">
                            <div class="featured-element-text-title">
                                <h5>wallpapers</h5>
                            </div>
                            <div class="featured-element-text-description">
                                <p>compra los wallpapers mas epicos del mundo</p>
                            </div>
                            <div class="featured-element-text-author">
                                <h6>by Jordi</h6>
                            </div>
                        </div>
                    </div>
                    <div class="featured-element">
                        <div class="featured-element-image">
                            <a href="https://onepiece.fandom.com/es/wiki/One_Piece_Wiki"><img src="images/onepiece.jpg"></a>
                        </div>
                        <div class="featured-element-title">
                            <div class="featured-element-text-title">
                                <h5>OnePiece</h5>
                            </div>
                            <div class="featured-element-text-description">
                                <p>Posters de OnePiece para todo el mundo</p>
                            </div>
                            <div class="featured-element-text-author">
                                <h6>by joan jobera</h6>
                            </div>
                        </div>
                    </div>
                    <div class="featured-element">
                        <div class="featured-element-image">
                            <a href="https://mushokutensei.fandom.com/wiki/Mushoku_Tensei_Wiki"><img src="images/mushokutensei - copia.jpg"></a>
                        </div>
                        <div class="featured-element-title">
                            <div class="featured-element-text-title">
                                <h5>Mushoku Tensei</h5>
                            </div>
                            <div class="featured-element-text-description">
                                <p>Mushoku Tensei y su rencarnacion mas pervertida en esta nueva coleccion</p>
                            </div>
                            <div class="featured-element-text-author">
                                <h6>by Ray</h6>
                            </div>
                        </div>
                    </div>
                    <div class="featured-element">
                        <div class="featured-element-image">
                            <a href="https://mob-psycho-100-espanol.fandom.com/es/wiki/Mob_Psycho_100_Espa%C3%B1ol_Wiki"><img src="images/product-18.jpg"></a>
                        </div>
                        <div class="featured-element-title">
                            <div class="featured-element-text-title">
                                <h5>Mob Psycho 100</h5>
                            </div>
                            <div class="featured-element-text-description">
                                <p>Desata tu poder con los poster de mob psyco 100</p>
                            </div>
                            <div class="featured-element-text-author">
                                <h6>by Mari Okada</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offer">
                <div class="offer-text">
                    <div class="offer-text-title">
                        <h1>compra cinco posters exclusivos ahora y llevate de regalo esta figura exclusiva de Witch Hat Atelier de regalo. con los mejores materiales disponibles en el mercado, tu estanteria no puede dejar escapar esta oportunidad. Siempre te hara compañia, despierto y en tus sueños.</h1>
                    </div>
                    <div class="offer-text-description">
                        <h6>Oferta disponible hasta el 1/03/2022</h6>
                    </div>
                </div>
                <div class="offer-image">
                    <img src="images/Figure.jpg">
                </div>
            </div>
            
        </main>

        @endsection

        {{-- <footer>
            <div class="footer-element copyright">
                <h4>@2048</h4>
            </div>
            <div class="footer-element author">
                <a href="https://www.milkywayediciones.com/"><h4>compra mangas en esta web</h4></a>
            </div>
        </footer> 

        
            
        <script type="module" src="js/main.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Ubuntu:700,700i', 'Ubuntu+Condensed:400']
                }
            });        
        </script> --}}

    {{-- </body>
</html> --}}
