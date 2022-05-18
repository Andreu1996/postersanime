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
                            <div class="desktop-five-columns mobile-five-columns">
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

                    

                        <div class="product-description-select">
                            <select class="product-description-select-options select-related">
                                <option value="tab1">Descripción1</option>
                                <option value="tab2">Descripción2</option>
                                <option value="tab3">Descripción3</option>
                            </select>
                        </div>

                        <div class="tabs-content">
                            <div class="tabContent select-related-options active" data-related="tab1">
                                <p>Poster edicion Mob Psycho 100 papel machetado de calidad superior, capaz de aguantar fuertes golpes y abolladuras. 30cm x 30 cm perfecto para cualquier pared y habitacion. compra ahora este producto y recivelo en menos de una semana.</p>
                            </div>
                            <div class="tabContent select-related-options" data-related="tab2">
                                <p>Compra todo lo que quieras con las mejores ofertas y servicios</p>
                            </div>
                            <div class="tabContent select-related-options" data-related="tab3">
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
                                    <div class="plus-minus-component">
                                        @include('front.components.mobile.plus-minus-button')
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="desktop-on-column">
                        <div class="columns">
                            <div class="buy">
                                <a class="cart">
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

                    <div class="pop-up-cart">

                        <div class="pop-up-cart-element">
                            <a class="pop-up-cart-svg" href="{{trans('cart')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </a>   
                        </div>

                        <div class="pop-up-cart-element">
                            <div class="pop-up-cart-text">
                                <p>Producto añadido al carrito</p>
                            </div>
                        </div>

                    </div>
                    
                </div>

            </div>