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

    </head>

    <body>
        
        
        <header>
            <div class="logotitle">
                <div class="logo">
                    <img src="images/Logo2.png">
                </div>
    
                <div class="title">
                    <h1>WallpaperWorld</h1>
                </div>
            </div>

            <div class="menu">
                    <div class="menu_element desktop-only">
                        <h3><a href="index.html">inicio</a></h3>
                    </div>
    
                    <div class="menu_element desktop-only">
                        <h3><a href="productos.html">productos</a></h3>
                    </div>
    
                    <div class="menu_element desktop-only">
                        <h3>servicios</h3>          
                    </div>
    
                    <div class="menu_element desktop-only">
                        <h3><a href="contacto.html">contacto</a></h3>
                    </div>
            </div>
                

            <div class="mobile-only">
                <nav class="navbar">   
                    <div class="ham" >  
                    <span class="bar1"></span>  
                    <span class="bar2"></span>  
                    <span class="bar3"></span>  
                    </div>  
                </nav>
            </div>

        </header> --}}

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
            <div class="desktop-two-columns mobile-one-column">

                <div class="column">
                    <div class="column-decoration">
                        <div class="main-image">
                            <a><img src="{{Storage::url('product-18.jpg')}}" alt=""></a>
                        </div>

                        <div class="secundary-image">
                            <div class="desktop-five-columns">
                                <div class="column">
                                    <div class="secundary-image-element">
                                        <a><img src="{{Storage::url('product-18.jpg')}}" alt=""></a>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="secundary-image-element">
                                        <a><img src="{{Storage::url('product-18.jpg')}}" alt=""></a>
                                    </div>                            </div>

                                <div class="column">
                                    <div class="secundary-image-element">
                                        <a><img src="{{Storage::url('product-18.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="secundary-image-element">
                                        <a><img src="{{Storage::url('product-18.jpg')}}" alt=""></a>
                                    </div>                           
                                </div>

                                <div class="column">
                                    <div class="secundary-image-element">
                                        <a><img src="{{Storage::url('product-18.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="column">

                        <div class="product-description">
                            <div class="product-title">
                                <h1>Mob Psycho 100</h1>
                            </div>
                        </div>
                            
                        <div class="product-description">
                            <div class="product-price">
                                <h1>30€</h1>
                            </div>
                        </div>

                        

                        <div class="tabs">
                            <div class="tab tabActive" data-tab="tab1">
                                <h3>Descripción</h3>
                            </div>
                            <div class="tab" data-tab="tab2">
                                <h3>Descripción2</h3>
                            </div>
                            <div class="tab" data-tab="tab3">
                                <h3>Descripción3</h3>
                            </div>
                        </div>

                        <div class="tabs-content">
                            <div class="tabContent tabContentActive" data-tab="tab1">
                                <p>Poster edicion Mob Psycho 100 papel machetado de calidad superior, capaz de aguantar fuertes golpes y abolladuras. 30cm x 30 cm perfecto para cualquier pared y habitacion. compra ahora este producto y recivelo en menos de una semana.</p>
                            </div>
                            <div class="tabContent" data-tab="tab2">
                                <p>Compra todo lo que quieras con las mejores ofertas y servicios</p>
                            </div>
                            <div class="tabContent" data-tab="tab3">
                                <p>si necesitas ayuda o tiene alguna duda puede contactarnos y le ayudaremos en todo lo que necesite</p>
                            </div>
                        </div>
                        

                        <div class="product-description">
                            <div class="product-quantity">
                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="product-quantity-text">
                                            <p>cantidad a comprar</p>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="product-quantiy-number">
                                            <div class="product-quantiy-number-element">
                                                <div id="plus"><button>+</button></div>
                                            </div>
                                            <div class="product-quantiy-number-element">
                                                <div class="product-quantiy-number-element-number">
                                                    <input id="total" type="number" value="1">
                                                </div>
                                            </div>
                                            <div class="product-quantiy-number-element">
                                                <div id="minus"><button>-</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="desktop-on-column">
                        <div class="columns">
                            <div class="buy">
                                <a class="cart" href="{{trans('cart')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </a>   
                      
                                <div class="buy-button">
                                    <a href="contacto.html"><button>Buy</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

        @endsection

        {{-- </main>
        
    </body>

    <footer>
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
    </script>
</html> --}}