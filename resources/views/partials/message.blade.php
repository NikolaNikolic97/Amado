<body>
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
@yield('search')
