<section class="p-t-20">
    <div class="container">
        <div class="row justify-content-centerq">
            <div class="col-md-12">
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                    </div>
                    <div class="table-data__tool-right">
                        <a href="{{route('users.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add user
                        </a>

                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        </div>
                    </div>
                </div>
                <div id="tabelaUsers" class="table-responsive table-responsive-data2">
                    <table  class="table table-data2">
                        <thead>
                        <tr>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Token</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr class="tr-shadow">
                            <td>{{$user->full_name}}</td>
                            <td>
                                <span class="block-email">{{$user->email}}</span>
                            </td>
                            <td class="desc">{{$user->user_name}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                <span class="status--process">{{$user->activated}}  </span>
                            </td>
                            <td>{{$user->token}}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="{{route('users.edit',['id'=>$user->user_id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                    </a>
                                    <button onclick="deleteUser({{$user->user_id}})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete  zmdi-hc-3x"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{$users->links()}}
                </ul>
            </nav>
        </div>
    </div>
</section>