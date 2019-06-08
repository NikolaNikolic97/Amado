<div class="card mx-auto" style="width: 60%;">
        <div class="card-header">
            <div class="card-body card-block ">
                <form action="{{route('users.store')}}" method="post"  class="form-horizontal ">
                    @csrf
                    <div class="row form-group">
                        <div class="col-12 ">
                            <input type="text" id="text-input" name="fullName" placeholder="Insert full name" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 ">
                            <input type="text" id="text-input" name="username" placeholder="Insert user name" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 ">
                            <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control">
                            <small class="help-block form-text">Please enter your email</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <input type="password" id="password-input" name="password" placeholder="Password" class="form-control">
                            <small class="help-block form-text">Please enter a complex password</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 ">
                            <select name="role" id="select" class="form-control">
                                <option value="0">Please select</option>
                                @foreach($role as $r)
                                    <option value="{{$r->id}}">{{$r->role}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group ">Active user
                        <div class="col-8  ">
                            <label class="au-checkbox">
                                <input type="checkbox" name="active" checked="checked">
                                <span class="au-checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2 ">
                            <button type="submit" class="btn btn-danger btn-outline-danger">
                                Insert
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
