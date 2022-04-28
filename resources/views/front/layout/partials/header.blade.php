
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
                <h3><a href="{{trans('index')}}">inicio</a></h3>
            </div>

            <div class="menu_element desktop-only">
                <h3><a href="{{trans('productos')}}">productos</a></h3>
            </div>

            <div class="menu_element desktop-only">
                <h3><a href="{{trans('admin-panel')}}">servicios</a></h3>
            </div>

            <div class="menu_element desktop-only">
                <h3><a href="{{trans('contacto')}}">contacto</a></h3>
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
                <h3><a href="{{trans('index')}}">inicio</a></h3>
            </div>

            <div class="menu_element mobile-only">
                <h3><a href="{{trans('productos')}}">productos</a></h3>
            </div>

            <div class="menu_element mobile-only">
                <h3><a href="{{trans('admin-panel')}}">servicios</a></h3>
            </div>

            <div class="menu_element mobile-only">
                <h3><a href="{{trans('contacto')}}">contacto</a></h3>
            </div>
        </div>
    </nav>

</header>