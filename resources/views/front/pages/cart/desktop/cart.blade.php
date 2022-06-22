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
                            <div class="desktop-four-columns">
                                <div class="column">
                                    <div class="cart-element" data-label="Product"><h3>{{$cart->price->product->title}}<h3></div>
                                </div>

                                <div class="column">
                                    <div class="cart-element" data-label="Quantity">
                                        <div class="plus-minus-container">
                                            <div class="plus-minus-button-cart">
                                                <button type="button" class="plus-minus-button-cart" data-type="minus" data-url="{{route('front_cart_minus', ['fingerprint' => $fingerprint,'price_id' => $cart->price_id ])}}">-</button>
                                            </div>
                                            <div class="quantity-container">
                                                <input class="plus-minus-container" name="quantity" class="plus-minus-button-cart" type="text" value="{{($cart->quantity)}}" data-min="0" disabled='disabled'>
                                            </div>
                                            <div class="plus-minus-button-cart">
                                                <button type="button" class="plus-minus-button-cart" data-type="plus" data-url="{{route('front_cart_plus', ['fingerprint' => $fingerprint,'price_id' => $cart->price_id ])}}"><span>+</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="cart-element" data-label="Unit Price">{{$cart->price->base_price}}€</div>
                                </div>
                                <div class="column">
                                    <div class="cart-element">
                                        <input value="{{($cart->quantity)*($cart->price->base_price)}} €" disabled>
                                    </div>
                                </div>        
                            </div>
                             
                        </div>                                 
                    @endforeach
                @endif

                <div class="total-price-elements">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="total-price-element">
                                <p>IVA</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="total-price-element">
                                <p>{{$tax_total}} €</p>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="total-price-element">
                                <h3>base imponible</h3>
                            </div>
                        </div>
                        <div class="column">
                            <div class="total-price-element">
                                <p>{{$base_total}} €</p>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="total-price-element">
                                <h3>Total base price</h3>
                            </div>
                        </div>
                        <div class="column">
                            <div class="total-price-element">
                                <p>{{$total}} €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desktop-one-column">
                <div class="column">
                    <div class="buy-button" data-url="{{route('front_checkout', ['fingerprint' => $fingerprint])}}">
                        <button>comprar</button>
                    </div>
                </div>
            </div>
            
        </div>

    @endsection

