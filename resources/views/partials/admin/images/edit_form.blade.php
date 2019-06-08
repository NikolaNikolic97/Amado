
<div class="card mx-auto" style="width: 60%;">
    <div class="card-header">
        <div class="card-body card-block ">
            <form action="{{route('images.update',['id'=>$images->id])}}" method="post" enctype="multipart/form-data"  class="form-horizontal ">
                @method('put')
                @csrf
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" value="{{$images->src}}" name="src" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" value="{{$images->alt}}" name="alt" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <select name="post" id="select" class="form-control">
                            @foreach($posts as $p)
                                @if($p->id_post == $images->id)
                                <option selected value="{{$p->id_post}}">{{$p->name}}</option>
                                    @else <option  value="{{$p->id_post}}">{{$p->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12">
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                </div>
                <div class="col-2 align-content-end ">
                    <button type="submit" class="btn btn-danger btn-outline-danger">
                        Insert
                    </button>
                </div>
        </form>
    </div>
</div>
</div>

