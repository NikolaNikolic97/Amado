Hi <strong>{{ $name }}</strong>,

<p>You can activate you account on
    <a href="{{route('activateUser',['token'=>$token])}}" >
        this
    </a>
    link</p>