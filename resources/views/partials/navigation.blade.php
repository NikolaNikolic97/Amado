<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('/')}}img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Amado Nav -->
        <nav class="amado-nav">
            <ul>
                @foreach($menu as $m)
                    <li ><a href="{{route($m->href)}}">{{$m->content}}</a></li>
                @endforeach
                    @if(session()->has('user'))
                        @if(session()->get('user')->role == 'admin')
                            <li>
                                <a href="{{ route('admin') }}">Admin</a>
                            </li>
                        @endif
                        <li>
                            <a href="{{ route('logout') }}">Logout</a>
                        </li>
                        @else <li ><a href="{{route('getLogin')}}">Login</a></li>
                    @endif


            </ul>
        </nav>

        <div class="cart-fav-search mb-30">
            @yield('menuSearch')
        @if(session()->has('user'))
            <a href="{{route('cart')}}" class="cart-nav"><img src="{{asset('/')}}img/core-img/cart.png" alt=""> Cart
                <span  >
                    {{\Illuminate\Support\Facades\Session::has('cart') ? '('.\Illuminate\Support\Facades\Session::get('cart')->totalQty.')' : '(0)'}}
                </span>
            </a>
        </div>
        @endif
        <!-- Social Button -->
        <div class="social-info d-flex justify-content-between">
            <a href="https://www.facebook.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com"><i class="fa fa-instagram " aria-hidden="true"></i></a>
            <a href="https://www.pinterest.com/"><i class="fa fa-facebook " aria-hidden="true"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter " aria-hidden="true"></i></a>
        </div>
    </header>
    <!-- Header Area End -->