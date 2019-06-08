<section class="p-t-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                    </div>
                    <div class="table-data__tool-right">
                        <a href="{{route('images.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add image
                        </a>

                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        </div>
                    </div>
                </div>
                <div id="tabelaImages" class="table-responsive table-responsive-data2">
                    <table  class="table table-data2">
                        <thead>
                        <tr>
                            <th>Source</th>
                            <th>Alt</th>
                            <th>Image</th>
                            <th>Post</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $img)
                            <tr class="tr-shadow">
                                <td>{{$img->src}}</td>
                                <td>{{$img->alt}}</td>
                                <td><img style="width: 200px;" src="{{$img->src}}" alt="{{$img->alt}}"> </td>
                                <td> {{$img->name}} </td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{route('images.edit',['id'=>$img->image_id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                        </a>
                                        <button onclick="deleteImage({{$img->image_id}})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                    {{$images->links()}}
                </ul>
            </nav>
        </div>
    </div>
</section>