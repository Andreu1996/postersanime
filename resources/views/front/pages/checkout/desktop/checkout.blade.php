<form class="front-form" action="{{route("checkout_store")}}">
    <div class="desktop-two-columns mobile-one-column">
        <div class="column">
            <input type="hidden" name="base_total" value="{{$base_total}}">                            
            <input type="hidden" name="tax_total" value="{{$tax_total}}">                           
            <input type="hidden" name="total" value="{{$total}}">  
            <input type="hidden" name="fingerprint" value="{{$fingerprint}}">
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
                            <input type="text" id="name" name="name" placeholder="tu apellido.." data-type="nombre">
                        </div>
                    </div>
                </div>
    
                <div class="column">
                    <div class="checkout-element">
                        <div class="form-element-label">
                            <label for="lname">Apellido</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="lastname" name="lastname" placeholder="tu apellido.." data-type="apellidos">                                  
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="desktop-one-column">
                <div class="column">
                    <div class="checkout-element">
                        <div class="form-element-label">
                            <label for="">Pais/Región</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="country" name="country" placeholder="nombre de la compañia.." data-type="country">  
                        </div>
                    </div>
                    
                </div>
            </div>
    
            <div class="desktop-one-column">
                <div class="column">
                    <div class="checkout-element">
                        <div class="form-element-label">
                            <label for="">Direccion</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="adress" name="adress" placeholder="Nombre de tu calle.." data-type="adress">                                  
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="desktop-one-column">
                <div class="column">
                    <div class="checkout-element">
                        <div class="form-element-label">
                            <label for="">Pueblo/Ciudad</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="city" name="city" placeholder="Ciudad o pueblo.." data-type="city">                                  
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="desktop-one-column">
                <div class="column">
                    <div class="checkout-element">
                        <div class="form-element-label">
                            <label for="">Comunidad Autonoma</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="state" name="state" placeholder="Ciudad o pueblo.." data-type="state">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="desktop-one-column">
                <div class="column">
                    <div class="checkout-element">
                        <div class="form-element-label">
                            <label for="">Telefono</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="phone" name="phone" placeholder="tu telefono.." data-type="phone">                                  
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="desktop-one-column">
                <div class="column">
                    <div class="checkout-element">
                        <div class="form-element-label">
                            <label for="">Correo Electronico</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="email" name="email" placeholder="tu correo electronico.." data-type="email">        
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
                                    <td><p>Iva</p></td>
                                    <td><p>{{$tax_total}} €</p><td>
                                </tr>

                                <tr>
                                    <td><p>Base Total</p></td>
                                    <td><p>{{$base_total}} €</p></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="column-top-decoration">
                                            <p>Total</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="column-top-decoration">
                                            <p>{{$total}} €</p>
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
                        <div class="payment_method_elements">
                            <div class="payment_method_element">
                                <input name="payment_method_id" type="radio" value="1" >Efectivo
                            </div>
                            <div class="payment_method_element">
                                <input name="payment_method_id" type="radio" value="2">Transferencia
                            </div>
                            <div class="payment_method_element">
                                <input name="payment_method_id" type="radio" value="3">Tarjeta de crédito
                            </div>
                        </div>
                    </div>
                </div>


                <div class="desktop-one-column">
                    <div class="column">
                        <div class="checkout-element">
                            <div class="finish-order-button"  data-url="{{route('front_sale')}}">
                                <button>Tramitar Pedido</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</form>

