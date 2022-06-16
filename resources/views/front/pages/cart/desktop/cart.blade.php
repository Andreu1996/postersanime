
<div class="desktop-two-columns-aside-cart mobile-one-column">
    <div class="column-main">
        <div class="cart-products">

            {{-- <form class="front-form form-contact" action="{{route('contacts_store')}}">

                <div class="desktop-two-columns mobile-one-column">
                    <div class="column">
                        <div class="form-element">
                            <div class="form-element-label">
                                <label for="fname">Nombre</label>
                            </div>
                            <div class="form-element-input">
                                <input type="text" id="fname" name="name" placeholder="tu nombre.." value="{{isset($contact->name) ? $contact->name: ''}}">
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="form-element">
                            <div class="form-element-label">
                                <label for="lname">Telefono</label>
                            </div>
                            <div class="form-element-input">
                                <input type="tel" id="phone" name="phone" placeholder="tu numero de telefono.." value="{{isset($contact->phone) ? $contact->phone: ''}}">                                    
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="desktop-two-columns mobile-one-column">

                    <div class="column">
                        <div class="form-element">
                            <div class="form-element-label">
                                <label for="lname">Last Name</label>
                            </div>
                            <div class="form-element-input">
                                <input type="text" id="lname" name="lastname" placeholder="tu apellido.." value="{{isset($contact->lastname) ? $contact->lastname: ''}}">                                  
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="form-element">
                            <div class="form-element-label">
                                <label for="lname">Correo</label>
                            </div>
                            <div class="form-element-input">
                                <input type="mail" id="mail" name="email" placeholder="tu correo electronico.." value="{{isset($contact->email) ? $contact->email: ''}}">                                  
                            </div>
                        </div>
                    </div>
                </div>

                <div class="desktop-one-column">
                    <div class="column">
                        <div class="form-element">
                            <div class="form-element-label center mobile-left">
                                <label for="lname">Mensaje</label>
                            </div>

                            <div class="form-element-input">
                                <textarea name="text"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="desktop-one-column">
                    <div class="column">
                        <div class="form-element">
                            <div class="form-element-button store-button" data-url="{{route('contacts_store')}}">
                                <button>Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form> --}}
            


            @if(isset($carts))
                @foreach($carts as $cart)
                    {{-- lo de routees en orden, el alias que le hemos puesto en las rutas a la url que queremos que habra, product es el parametro indicado en routes (productos\product), $category->id indica el id de la tabla --}}
                    <div class="product-element product-details" data-url="{{route('front_cart_show', ['cart' => $cart->id])}}">
                        <div class="product-image">
                            <a><img src="{{Storage::url('product-17.jpg')}}"></a>
                        </div>

                        <div class="product-title red-text" value="{{$cart->id}}">
                            <h3>{{$cart->name}}</h3>
                        </div>

                        <div class="product-price" >
                            <p>{{$cart->price->first()->base_price}}€</p>
                        </div>

                        <div class="product-details">
                            <button>Detalles</button>
                        </div>
                    </div>
                @endforeach
            @endif



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

                        <div class="plus-minus-component">
                            @include('front.components.desktop.plus-minus-button')
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

                        <div class="plus-minus-component">
                            @include('front.components.desktop.plus-minus-button')
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

                        <div class="plus-minus-component">
                            @include('front.components.desktop.plus-minus-button')
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