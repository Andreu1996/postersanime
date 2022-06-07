
<header>    

    <div class="logotitle">
        <div class="logo">
            <img src="{{Storage::url('logo2.png')}}" alt="">
        </div>

        <div class="title">
            <h1>WallpaperWorld</h1>
        </div>
        
    </div>

    <div class="menu">
            <div class="menu_element desktop-only">
                <div class="menu_element" data-url="{{route('front_index')}}">
                    <h3>inicio</h3>
                </div>
            </div>

            <div class="menu_element desktop-only">
                <div class="menu_element" data-url="{{route('front_products')}}">
                    <h3>productos</h3>
                </div>
            </div>

            <div class="menu_element desktop-only">
                <div class="menu_element">
                    <h3>servicios</h3>
                </div>
            </div>

            <div class="menu_element desktop-only">
                <div class="menu_element" data-url="{{route('front_contact')}}">
                    <h3>contacto</h3>
                </div>
            </div>

            <div class="menu_element desktop-only">
                <div class="menu_element" data-url="{{route('front_faqs')}}">
                    <h3>preguntas</h3>
                </div>
            </div>
    </div>

    <div class="header-menu-hamburger">
        <nav class="navbar mobile-only">   
            <div class="ham">  
            <span class="bar1"></span>  
            <span class="bar2"></span>  
            <span class="bar3"></span>  
            </div>  
        </nav>
    </div>
    

    <nav class="navbar">
        <div  class="nav-sub">
            <div class="menu_element mobile-only">
                <h3>inicio</h3>
            </div>

            <div class="menu_element mobile-only">
                <h3>productos</h3>
            </div>

            <div class="menu_element mobile-only">
                <h3>servicios</h3>
            </div>

            <div class="menu_element mobile-only">
                <h3>contacto</h3>
            </div>

            <div class="menu_element mobile-only">
                <h3>preguntas</h3>
            </div>
        </div>
    </nav>

</header>