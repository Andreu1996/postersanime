@extends('front.layout.master')   

    @section('content')

        <div class="desktop-one-column mobile-one-column">
            <div class="column"> 
                <div class="cart-titles-elements">                       
                    <div class="cart-titles-element">
                        <h2>producto</h2>
                    </div>
                    <div class="cart-titles-element">
                        <h2>cantidad</h2>
                    </div>
                    <div class="cart-titles-element">
                        <h2>precio</h2>
                    </div>
                    <div class="cart-titles-element">
                        <h2>precio total</h2>
                    </div>
                </div>
                @if(isset($carts))                    
                    @foreach($carts as $cart)
                        <div class="cart-elements">
                            <div class="cart-element" data-label="Product"><h3>{{$cart->price->product->title}}<h3></div>
                            <div class="cart-element" data-label="Quantity">
                                <div class="plus-minus-container">
                                    <div class="remove-product-cart">
                                        <button data-type="plus">-</button>
                                    </div>
                                    <div class="plus-minus-container">
                                        <input  name="quantity" class="plus-minus-input-cart" type="text" value="{{($cart->quantity)}}" data-min="0">
                                    </div>
                                    <div class="add-product-cart">
                                        <button data-type="minus"><span>+</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-element" data-label="Unit Price">{{$cart->price->base_price}}€</div>
                            <div class="cart-element">
                                <input value="{{($cart->quantity)*($cart->price->base_price)}}€" disabled>
                            </div> 
                        </div>                                 
                    @endforeach

                    <div class="total-price-elements">
                        <div class="add-product-cart">
                            <h3>Iva</h3>
                        </div>
                        <div class="total-price-element">
                            <p>{{$cart->price->tax->type}}%</p>
                        </div>
                        <div class="total-price-element">
                            <h3>Total of tax</h3>
                        </div>
                        <div class="total-price-element">
                            <p>{{(($cart->quantity)*($cart->price->base_price))*($cart->price->tax->multiplicator)}}</p>
                        </div>
                        <div class="total-price-element">
                            <h3>Total base price</h3>
                        </div>
                        <div class="total-price-element">
                            <input value="{{(($cart->quantity)*($cart->price->base_price))*($cart->price->tax->multiplicator)}}€" disabled>  
                        </div>
                    </div>
                    
                @endif
            </div>
            <div class="column-aside-cart">
            </div>
        </div>

    @endsection


            {{-- <div class="cart-product-element">
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

        </div> --}}
        {{-- <div class="total-price">
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
</div> --}}

