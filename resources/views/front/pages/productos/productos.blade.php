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

        </header>

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

        <main> --}}
            
        @extends('front.layout.master')

        @section('content')

            <div class="desktop-two-columns-aside mobile-one-column">
                    <div class="column-aside column">
                            <div class="categories desktop-only">
                                <div class="categories-element">
                                    <h2>Categorias</h2>
                                </div>

                                <div class="categories-element">
                                    <button></button>
                                    <div class="button-text red-text">
                                        <h4>Shonen Jump</h4>
                                    </div>
                                </div>

                                <div class="categories-element">
                                    <button></button>
                                    <div class="button-text red-text">
                                        <h4>Milky Way Ediciones</h4>
                                    </div>
                                </div>

                                <div class="categories-element">
                                    <button></button>
                                    <div class="button-text red-text">
                                        <h4>Kioto Animation</h4>
                                    </div>
                                </div>

                                <div class="categories-element">
                                    <button></button>
                                    <div class="button-text red-text">
                                        <h4>Uffo Table</h4>
                                    </div>
                                </div>
                            </div>

                    </div>

                <div class="column-main column">
                    <div class="desktop-two-columns-aside mobile-one-column-inline">

                        <div class="column-main column">
                            <div class="products-title">
                                <h2>Mostrando 15 productos de 100</h2>
                            </div>
                        </div>

                        <div class="column-aside column">
                            <div class="select-option">
                                <select>
                                    <option>destacados</option>
                                    <option>ofertas</option>
                                    <option>de mayor a menor precio</option>
                                    <option>de menor a mayor precio</option>        
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="select-option mobile-only">
                        <select>
                            <option>Todas las Categorias</option>
                            <option>Shonen Jump</option>
                            <option>Mily Way Ediciones</option>
                            <option>Kioto Animation</option>
                            <option>uffo Table</option>        
                        </select>
                    </div>

                    <div class="Products">
                        <div class="desktop-three-columns mobile-one-column">

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-17.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Dragon Ball</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>20€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a href="{{trans('producto')}}"><img src="{{Storage::url('product-18.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Mob Psycho 100</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>30€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-19.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Mushoku Tensei</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>25€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="desktop-three-columns mobile-one-column">

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-20.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>one piece</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>50€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-1.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Boku No Hero</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>10€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-2.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Game Over</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>30€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="desktop-three-columns mobile-one-column">

                            <div class="column">
                                <div class="product-element ">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-3.png')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Kaguya-sama</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>60€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-4.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Fire Force</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>20€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-15.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Kimetsu No Yaiba</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>100€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="desktop-three-columns mobile-one-column">

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-6.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Kimetsu No Yaiba</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>150€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-7.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Free</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>20€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-8.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Doki-Doki Sama</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>30€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="desktop-three-columns mobile-one-column">

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-9.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>3-Gatsu No Lion</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>10€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-10.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Ramen-domo</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>35€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="product-element">
                                    <div class="product-image">
                                        <a><img src="{{Storage::url('product-11.jpg')}}" alt=""></a>
                                    </div>

                                    <div class="product-title red-text">
                                        <h3>Gosick</h3>
                                    </div>

                                    <div class="product-price">
                                        <p>55€</p>
                                    </div>

                                    <div class="product-details">
                                        <button>Detalles</button>
                                    </div>
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