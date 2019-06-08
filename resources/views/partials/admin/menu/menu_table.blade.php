<section class="p-t-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                    </div>
                    <div class="table-data__tool-right">
                        <a href="{{route('menu.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add to menu
                        </a>

                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        </div>
                    </div>
                </div>
                <div id="tabelaMenu" class="table-responsive table-responsive-data2">
                    <table  class="table table-data2">
                        <thead>
                        <tr>
                            <th>Href</th>
                            <th>Content</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menu as $m)
                            <tr class="tr-shadow">
                                <td>{{$m->href}}</td>
                                <td>{{$m->content}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{route('menu.edit',['id'=>$m->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                        </a>
                                        <button onclick="deleteMenu({{$m->id}})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                    {{$menu->links()}}
                </ul>
            </nav>
        </div>
    </div>
</section>