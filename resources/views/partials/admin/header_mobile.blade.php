<header class="header-mobile header-mobile-2 d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="{{route('admin')}}">
                        Analitics</a>
                </li>
                <li>
                    <a href="{{route('users.index')}}">
                        Users</a>
                </li>
                <li>
                    <a href="{{route('menu.index')}}">
                        Menu</a>
                </li>
                <li>
                    <a href="{{route('brands.index')}}">
                        Brands</a>
                </li>
                <li>
                    <a href="{{route('categories.index')}}">
                        Categories</a>
                </li>
                <li >
                    <a  href="{{route('posts.index')}}">
                        Posts</a>
                </li>
                <li >
                    <a  href="{{route('images.index')}}">
                        Images</a>
                </li>
                <li >
                    <a  href="{{route('getActions')}}">
                        Actions</a>
                </li>
            </ul>
        </div>
    </nav>
</header>