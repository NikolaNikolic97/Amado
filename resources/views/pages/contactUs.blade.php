@extends("layout.frontEnd")
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section("mainContent")
<h1 class="h1__login" >Contact us</h1>
<div class="loginPage">
    <div class="form ">
        <form class="login-form" action="{{route('contacUs')}}" method="post">
            @csrf
            <div class="input">
                <input id="name" name="username" type="text" placeholder="username"/>
            </div>
            <div class="input">
                <input id="email" name="email" type="email" placeholder="example@gmail.com"/>
            </div>
            <textarea name="coment" id="coment"  rows="5" >
            </textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</div>
@endsection