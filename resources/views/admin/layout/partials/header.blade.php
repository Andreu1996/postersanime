
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
                <h3><a href="{{trans('admin-panel')}}">servicios</h3>          
            </div>

            <div class="menu_element desktop-only">
                <h3><a href="{{trans('contacto')}}">contacto</a></h3>
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