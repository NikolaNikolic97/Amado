<form class="login-form" action="{{route('login')}}" method="post" >
    @csrf
    <div class="input">
        <input id="loginUsername" name="username" type="text" placeholder="username or email"/>
    </div>
    <div class="input">
        <input id="password" class="password" name="password" type="password" placeholder="password"/>
    </div>
    <button class="btn__login" id="form-btn" type="submit"> <!--onclick="loginValidate(event)"-->login</button>
    <p class="message">Not registered? <a href="javascript:void(0);">Create an account</a></p>
</form>
