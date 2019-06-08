<section class="p-t-20">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                    </div>
                    <div class="table-data__tool-right">
                        <a href="{{route('posts.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add post
                        </a>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        </div>
                    </div>
                </div>
                <div id="tabelaPosts" class="table-responsive table-responsive-data2">
                    <table  class="table table-data2">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Quantity</th>
                            <th>Img</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr class="tr-shadow">
                                <td>{{$post->description}}</td>
                                <td>{{$post->name}}</td>
                                <td class="desc">{{$post->price}}</td>
                                <td>{{$post->category}}</td>
                                <td>{{$post->brand}}</td>
                                <td class="desc">{{$post->quantity}}</td>
                                @foreach($img as $i)
                                @if($post->id_post == $i->id_post)
                                <td><img src="{{$i->src}}" alt="{{$i->alt}}"> </td>
                                    @break
                                @endif
                                @endforeach
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{route('posts.edit',['id'=>$post->id_post])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                        </a>
                                        <button onclick="deletePost({{$post->id_post}})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
            <nav  aria-label="Page navigation example">
                <ul class="pagination">
                    {{$posts->links()}}
                </ul>
            </nav>
        </div>
    </div>
</section>