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

            <div class="checkout-title">
                <h1>Checkout</h1>
            </div>

            <div class="desktop-two-columns mobile-one-column">
                <div class="column">

                    <div class="billing-title">
                        <h3>datos de facturacion</h3>
                    </div>
                    
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Nombre</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="tu apellido..">                                  
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Apellido</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="tu apellido..">                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Nombre de la compañia (Opcional)</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="nombre de la compañia..">                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Pais/Región</label>
                                </div>
                                <div class="country-options">
                                    <select>
                                        <option>España</option>
                                        <option>Francia</option>
                                        <option>Italia</option>
                                        <option>Portugal</option>
                                        <option>Reino Unido</option>        
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Direccion</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="Nombre de tu calle..">                                  
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="Apartamento, Piso, Numero.. (opcional)">                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Pueblo/Ciudad</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="Ciudad o pueblo..">                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Comunidad Autonoma</label>
                                </div>
                                <div class="country-options">
                                    <select>
                                        <option>Isals Baleares</option>
                                        <option>Madrid</option>
                                        <option>Cataluña</option>
                                        <option>Extremadura</option>
                                        <option>Andalucia</option>        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">ZIP</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="tu numero ZIP..">                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Telefono</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="tu telefono..">                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="checkout-element">
                                <div class="form-element-label">
                                    <label for="lname">Correo Electronico</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" id="lname" name="lastname" placeholder="tu correo electronico..">                                  
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="column">
                    <div class="your-order-info">
                        <div class="order-title">
                            <h3>Tu pedido</h3>
                        </div>
    
                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="order-price">
                                    <table>
            
                                        <tr>
                                            <td><p>productos</p></td>
                                            <td><p>subtotal</p></td>
                                        </tr>
            
                                        <tr>
                                            <td><p>Mob Psycho 100</p></td>
                                            <td><p>30€</p></td>
                                        </tr>
            
                                        <tr>
                                            <td><p>Subtotal</p></td>
                                            <td><p>30€</p></td>
                                        </tr>
            
                                        <tr>
                                            <td>
                                                <div class="column-top-decoration">
                                                    <p>Total</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="column-top-decoration">
                                                    <p>30€</p>
                                                </div>
                                            </td>
                                        </tr>
            
                                    </table>
                                </div>
                            </div>
                        </div>  
                        
    
                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="checkout-element">
                                    <div class="bank-transfer">
                                        <div class="bank-transfer-element">
                                            <div class="bank-transfer-simbol">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg>
                                            </div>
                                        </div>
                                        
                                        <div class="bank-transfer-element">
                                            <div class="bank-transfer-simbol">
                                                <p>Direct bank tranfer</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
    
                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="bank-transfer-info">
                                    <p>haz tu transferencia directamente en nuestros bancos. por favos usa tu orden ID como referencia de pago. tu pedido no sera enviado hasta que los gastos sean comprobados en nuestra cuenta.</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="paypla-decoration">
                            <div class="desktop-two-columns">
    
                                <div class="column">
                                    <div class="checkout-element">
                                        <div class="paypal">
                                            <div class="paypal-element">
                                                <div class="paypal-simbol">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12"/></svg>
                                                </div>
                                            </div>
                                            
                                            <div class="paypal-element">
                                                <div class="paypal-text-normal">
                                                    <P>PayPal</P>
                                                </div>
                                            </div>
                                            
        
                                            <div class="paypal-element">
                                                <div class="paypal text-purple">
                                                    <P>¿Que es PayPal?</P>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
        
                                <div class="column">
                                    <div class="checkout-element">
                                        <div class="paypal-card-types">
                                            <a><img src="{{Storage::url('paypal.jpg')}}"></a>
                                        </div>
                                    </div>
                                    
                                </div>
        
                            </div>
                        </div>
                        
    
                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="checkout-element">
                                    <div class="bank-transfer-info">
                                        <p>Tus datos personales seran usados en el proceso de tu pedido, soportado en la experiencia de este sitio web, y otros propositos descritos en nuestro <div class="text-prurple"><p>poliza de privacidad</p></div></p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="checkout-element">
                                    <div class="finish-order-button">
                                        <button>Tramitar Pedido</button>
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