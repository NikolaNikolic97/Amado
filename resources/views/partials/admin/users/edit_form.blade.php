<div class="card mx-auto" style="width: 60%;">
    <div class="card-header">
        <div class="card-body card-block ">
            <form action="{{route('users.update',['id'=>$user->user_id])}}" method="post" enctype="multipart/form-data" class="form-horizontal ">
                @method('put')
                @csrf
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input"  value="{{$user->full_name}}" name="fullName" placeholder="Insert full name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" name="username" value="{{$user->user_name}}" placeholder="Insert user name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="email" id="email-input" name="email" value="{{$user->email}}" placeholder="Enter Email" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12">
                        <input type="password" id="password-input" name="password"  placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <select name="role" id="select" class="form-control">
                            @foreach($role as $r)
                                @if($user->user_id == $r->id)
                                <option selected value="{{$r->id}}">{{$r->role}}</option>
                                    @else <option  value="{{$r->id}}">{{$r->role}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group ">Active user
                    <div class="col-8  ">
                        <label class="au-checkbox">
                            @if($user->activated == 1)
                            <input  type="checkbox" name="active" checked="checked">
                                @else <input  type="checkbox" name="active">
                            @endif
                            <span class="au-checkmark"></span>
                        </label>
                    </div>
                    <div class="col-2 ">
                        <button class="btn btn-danger btn-outline-danger">
                            Update
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
