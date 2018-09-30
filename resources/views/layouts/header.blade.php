<!-- Header Area Start -->
<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('img/core-img/logo3.png') }}" alt=""></a>
    </div>
    <!-- Amado Nav -->
    <nav class="amado-nav">
        <ul>
            <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="#">Nosotros</a></li>
            @auth
                <li><a href="#">Mis servicios</a></li>
                <li><a href="#">Mi perfil</a></li>
                <li><a href="{{ route('logout') }}">Salir</a></li>
            @endauth
        </ul>
    </nav>
    <!-- Button Group -->
    <div class="amado-btn-group mt-30 mb-100">
        @guest
            <a href="{{ route('login') }}" class="btn amado-btn mb-15">Mi Cuenta</a>
        @endguest
    </div>
    <!-- Cart Menu -->
    <div class="cart-fav-search mb-100">
        <a href="#" class="cart-nav"><img src="{{ asset('img/core-img/cart.png') }}" alt=""> Cart <span>(0)</span></a>
        <a href="#" class="search-nav"><img src="{{ asset('img/core-img/search.png') }}" alt=""> Buscar</a>
    </div>
    <!-- Social Button -->
    <div class="social-info d-flex justify-content-between">
        <a href="#" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
</header>
<!-- Header Area End -->