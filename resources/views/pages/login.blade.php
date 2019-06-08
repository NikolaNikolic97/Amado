@extends("layout.frontEnd")
@section("mainContent")
    <h1 class="h1__login" >Login</h1>
    <div class="loginPage">
        <div class="form ">
            @include("partials.login.registration_form")
            @include("partials.login.login_form")
        </div>
    </div>
@endsection
@section('scripts')
    <script src="js/validation.js"></script>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif