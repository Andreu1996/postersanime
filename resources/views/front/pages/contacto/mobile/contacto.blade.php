
            <div class="desktop-one-column">
                <div class="top-text">
                    @include('front.components.mobile.page-title')
                </div>

            </div>

            <div class="desktop-two-columns mobile-one-column">
                <div class="column">
                        <div class="text-info form-text">
                            <h2>Datos de contacto</h2>
                        </div>  

                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="contact-info">
                                    <div class=" contact-svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                    </div>
                                    <div class="contact-text">
                                        <p>655821696</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="desktop-one-column">

                            <div class="contact-info">
                                <div class="contact-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                </div>
                                <div class="contact-text">
                                    <p>posters.anime@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="desktop-one-column">

                            <div class="contact-info">
                                <div class="contact-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                </div>
                                <div class="contact-text">
                                    <p>Plaça d'Espanya, 13, 07002 Palma, Illes Balears</p>
                                </div>
                            </div>
                        </div>


                </div>

                <div class="column">
                    <form class="form-contact" action="/action_page.php">

                        <div class="desktop-two-columns mobile-one-column">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label for="fname">Nombre</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="text" id="fname" name="firstname" placeholder="tu nombre..">
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label for="lname">Telefono</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="tel" id="phone" name="phone" placeholder="tu numero de telefono..">                                    
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
                                        <input type="text" id="lname" name="lastname" placeholder="tu apellido..">                                  
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label for="lname">Correo</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="mail" id="mail" name="lastname" placeholder="tu correo electronico..">                                  
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
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-button">
                                        <button>Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>