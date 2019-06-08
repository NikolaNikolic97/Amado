<div class="card mx-auto" style="width: 60%;">
    <div class="card-header">
        <div class="card-body card-block ">
            <form action="{{route('images.store')}}" method="post" enctype="multipart/form-data"  class="form-horizontal ">
                @csrf
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" name="alt" placeholder="Insert alt" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <select name="post" id="select" class="form-control">
                            <option value="0">Please select post</option>
                            @foreach($posts as $p)
                                <option value="{{$p->id_post}}">{{$p->name}}</option>
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
        </div>

        </form>
    </div>
</div>
</div>
