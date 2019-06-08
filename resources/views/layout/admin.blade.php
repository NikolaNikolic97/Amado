@include('partials.admin.head')
        <script>
            let baseUrl = '{{url("/")}}';
            let csrf = '{{csrf_token()}}';
            let asset = '{{asset('/')}}';
        </script>
<body class="animsition">
        @if (session("msg"))
            <div class="alert alert-success" role="alert">
                {{session("msg")}}
            </div>
        @endif
        @if (session("msg_error"))
            <div class="alert alert-danger" role="alert">
                {{session("msg_error")}}
            </div>
        @endif
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="{{asset('/')}}images/icon/logo-white.png" alt="CoolAdmin" />
                    </a>
                </div>
                    @include('partials.admin.header_navbar')
                    @include('partials.admin.header_tool')
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->
    <!-- HEADER MOBILE-->
        @include('partials.admin.header_mobile')
        @include('partials.admin.sub_header_mobile')
    <!-- END HEADER MOBILE -->
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        @include('partials.admin.breadcrumb')
        <!-- END BREADCRUMB-->
        <!-- WELCOME-->
        @include('partials.admin.welcome')
        <!-- END WELCOME-->
        @yield('mainContent')
        <!-- COPYRIGHT-->
        @include('partials.admin.copyright')
        <!-- END COPYRIGHT-->
    </div>

</div>

@include('partials.admin.footer')