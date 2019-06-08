<form class="register-form" action="{{route('registration')}}" method="post" >
    @csrf
    <div class="input">
        <input id="fullName" name="fullName" type="text" placeholder="full name"/>
    </div>
    <div class="input">
        <input id="RegistrationUsername" name="username" type="text" placeholder="username"/>
    </div>
    <div class="input">
        <input id="email" name="email" type="email" placeholder="example@gmail.com"/>
    </div>
    <div class="input">
        <input class="password" name="password" type="password" placeholder="password"/>
    </div>
    <button class="btn__registration" type="submit"  >create account</button>
    <p class="message">Already registered? <a href="javascript:void(0);">Sign In</a></p>
</form>