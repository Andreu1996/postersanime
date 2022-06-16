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

        <div class="desktop-two-columns mobile-one-column front-product">

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
                        <div class="product-title red-text" data-product="{{$product->title}}">
                            <h3>{{$product->title}}</h3>
                        </div>
                    </div>
                        
                    <div class="product-description">
                        <div class="product-price" >
                            <p>{{$product->price->first()->base_price}} €</p>
                        </div>
                    </div>

                    
                    <div class="tabs">
                        <div class="tab tabActive" data-tab="tab1">
                            <h3>Descripción</h3>
                        </div>
                        <div class="tab" data-tab="tab2">
                            <h3>caracteristicas</h3>
                        </div>
                        <div class="tab" data-tab="tab3">
                            <h3>opiniones</h3>
                        </div>
                    </div>

                    <div class="tabs-content">
                        <div class="tabContent tabContentActive" data-tab="tab1">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="tabContent" data-tab="tab2" >
                            <p>{{$product->caracteristics}}</p>
                        </div>
                        <div class="tabContent" data-tab="tab3" >
                            <p>{{$product->opinions}}</p>
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
                                    @include('front.components.desktop.plus-minus-button')
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="desktop-on-column">
                    <div class="columns">
                        <div class="buy">
                            <a class="add-product-to-cart cart">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </a>   
                    
                            <div class="add-product-to-cart">
                                <button>añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pop-up-cart">

                    <div class="pop-up-cart-element">
                        <a class="pop-up-cart-svg">
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