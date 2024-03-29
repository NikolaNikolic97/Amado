<div class="header__tool">

    <div class="account-wrap">
        <div class="account-item account-item--style2 clearfix js-item-menu">
            <div class="image">
                <img src="{{asset('/')}}images/icon/avatar-01.jpg" alt="John Doe" />
            </div>
            <div class="content">
                <a class="js-acc-btn" href="#">{{\Illuminate\Support\Facades\Session::get('user')->full_name}}</a>
            </div>
            <div class="account-dropdown js-dropdown">
                <div class="info clearfix">
                    <div class="image">
                        <a href="#">
                            <img src="{{asset('/')}}images/icon/avatar-01.jpg" alt="John Doe" />
                        </a>
                    </div>
                    <div class="content">
                        <h5 class="name">
                            <a href="#">{{\Illuminate\Support\Facades\Session::get('user')->full_name}}</a>
                        </h5>
                        <span class="email">{{\Illuminate\Support\Facades\Session::get('user')->email}}</span>
                    </div>
                </div>
                <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                    </div>
                </div>
                <div class="account-dropdown__footer">
                    <a href="{{route('logout')}}">
                        <i class="zmdi zmdi-power"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>