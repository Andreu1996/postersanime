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

    <body> --}}
        
        {{-- <header>
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

        {{-- <nav class="navbar">
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
        </nav> --}}

        {{-- <main> --}}

        @extends('front.layout.master')

        @section('content')
            <div class="desktop-one-column">
                <div class="column">
                    <div class="cart-title">
                            <h1>cesta</h1>
                    </div>
                </div>
            </div>
            
            <div class="desktop-two-columns-aside-cart mobile-one-column">
                <div class="column-main">
                    <div class="cart-products">

                        <div class="cart-product-element">
                            <div class="desktop-two-columns-aside mobile-one-column">
                                <div class="column-main column">
                                    <div class="cart-product-element-image-description">
                                        <div class="cart-product-image">
                                            <a><img src="{{Storage::url('product-20.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="cart-product-description">
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text">
                                                    <h3>Poster One piece cromado de alta calidad. 30cm x 30cm. Papel de alta calidad, resistente al agua y al calor.</h3>
                                                </div>
                                            </div>
                                            
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text-stock red-text">
                                                    <p>on stock</p>
                                                </div>
                                            </div>
    
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text-gift">
                                                    <button></button>
                                                    <p>es un regalo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="plus-minus-container">
                                        <div class="plus-minus-button-element" id="left">
                                            <button data-type="plus" class="plus-minus-button">+</button>
                                        </div>
                                        <div class="product-quantiy-number-element-number">
                                            <input class="plus-minus-input" type="number" value="1" onKeyDown="return false" disabled="disabled">
                                        </div>
                                        <div class="plus-minus-button-element" id="right">
                                            <button data-type="minus" class="plus-minus-button">-</button>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="column-aside">
                                    <div class="cart-procut-price">
                                        <h1>50€</h1>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="cart-product-element">
                            <div class="desktop-two-columns-aside mobile-one-column">
                                <div class="column-main column">
                                    <div class="cart-product-element-image-description">
                                        <div class="cart-product-image">
                                            <a><img src="{{Storage::url('product-18.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="cart-product-description">
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text">
                                                    <h3>Poster edicion Mob Psycho 100 papel machetado de calidad superior, capaz de aguantar fuertes golpes </h3>
                                                </div>
                                            </div>
                                            
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text-stock red-text">
                                                    <p>on stock</p>
                                                </div>
                                            </div>
    
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text-gift">
                                                    <button></button>
                                                    <p>es un regalo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="plus-minus-container">
                                        <div class="plus-minus-button-element" id="left">
                                            <button data-type="plus" class="plus-minus-button">+</button>
                                        </div>
                                        <div class="product-quantiy-number-element-number">
                                            <input class="plus-minus-input" type="number" value="1" onKeyDown="return false" disabled="disabled">
                                        </div>
                                        <div class="plus-minus-button-element" id="right">
                                            <button data-type="minus" class="plus-minus-button">-</button>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="column-aside">
                                    <div class="cart-procut-price">
                                        <h1>30€</h1>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="cart-product-element">
                            <div class="desktop-two-columns-aside mobile-one-column">
                                <div class="column-main column">
                                    <div class="cart-product-element-image-description">
                                        <div class="cart-product-image">
                                            <a><img src="{{Storage::url('product-6.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="cart-product-description">
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text">
                                                    <h3>Nezuko-chan de Kimetsu no Yaiba. 30cm x 30cm. Calidad insuperable. inigualable e irresistible. Compralo</h3>
                                                </div>
                                            </div>
                                            
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text-stock red-text">
                                                    <p>on stock</p>
                                                </div>
                                            </div>
    
                                            <div class="cart-product-description-element">
                                                <div class="cart-product-text-gift">
                                                    <button></button>
                                                    <p>es un regalo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="plus-minus-container">
                                        <div class="plus-minus-button-element" id="left">
                                            <button data-type="plus" class="plus-minus-button">+</button>
                                        </div>
                                        <div class="product-quantiy-number-element-number">
                                            <input class="plus-minus-input" type="number" value="1" onKeyDown="return false" disabled="disabled">
                                        </div>
                                        <div class="plus-minus-button-element" id="right">
                                            <button data-type="minus" class="plus-minus-button">-</button>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="column-aside">
                                    <div class="cart-procut-price">
                                        <h1>150€</h1>
                                    </div> 
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="total-price">
                        <div class="desktop-two-columns mobile-one-column">
                            <div class="column">
                                <div class="products">
                                    <div class="product-name-element">
                                        <h2>Productos</h2>
                                    </div>
                
                                    <div class="product-name">
                                        <div class="product-name-element">
                                            <p>One Piece</p>
                                        </div><div class="product-name-element">
                                            <p>Mob Pshyco 100</p>
                                        </div><div class="product-name-element">
                                            <p>Kimetsu no yaiba</p>
                                        </div>
                                    </div>
                                </div>
                                
            
                            </div>
                            <div class="column">
                                <div class="desktop-two-columns mobile-two-columns">
                                    <div class="column">
                                        <div class="product-name-element">
                                            <p>precio productos</p>
                                        </div>
                                        <div class="product-name-element">
                                            <p>iva 21%</p>
                                        </div>
                                        <div class="product-name-element">
                                            <p>envio</p>
                                        </div>
                                        <div class="product-name-element column-top-decoration">
                                            <p>Total</p>
                                        </div>
                                    </div>
            
                                    <div class="column">
                                        <div class="product-name-element">
                                            <p>230€</p>
                                        </div>
                                        <div class="product-name-element">
                                            <p>48.3€</p>
                                        </div>
                                        <div class="product-name-element">
                                            <p>4.99€</p>
                                        </div>
                                        <div class="product-name-element column-top-decoration">
                                            <p>283,29</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="cart-buy-button">
                            <a href="checkout.html"><button>Comprar ahora</button></a>
                        </div>
                    </div>

                </div>


                <div class="columns-aside">
                    
                    <div class="cart-products">

                        <div class="recomendations-title red-text">
                            <h3>tal vez te guste</h3>
                        </div>

                        <div class="cart-recomendation-product">
                            <div class="cart-recomendation-image">
                                <a><img src="{{Storage::url('product-19.jpg')}}" alt=""></a>
                            </div>

                            <div class="cart-Recomendation-text">
                                <div class="recomendation-text-element">
                                    <p>Mushoku Tensei</p>

                                </div>
                                <div class="recomendation-text-element">
                                    <h3>20€<h3>
                                </div>
                                <div class="recomendation-text-element">
                                    <div class="cart-add-button">
                                        <button>Añadir al carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart-recomendation-product">
                            <div class="cart-recomendation-image">
                                <a><img src="{{Storage::url('product-17.jpg')}}" alt=""></a>
                            </div>

                            <div class="cart-Recomendation-text">
                                <div class="recomendation-text-element">
                                    <p>Dragon Ball</p>

                                </div>
                                <div class="recomendation-text-element">
                                    <h3>60€<h3>
                                </div>
                                <div class="recomendation-text-element">
                                    <div class="cart-add-button">
                                        <button>Añadir al carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart-recomendation-product">
                            <div class="cart-recomendation-image">
                                <a><img src="{{Storage::url('product-15.jpg')}}" alt=""></a>
                            </div>

                            <div class="cart-Recomendation-text">
                                <div class="recomendation-text-element">
                                    <p>ToraDora</p>

                                </div>
                                <div class="recomendation-text-element">
                                    <h3>15€<h3>
                                </div>
                                <div class="recomendation-text-element">
                                    <div class="cart-add-button">
                                        <button>Añadir al carrito</button>
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
    </script>
</html> --}}