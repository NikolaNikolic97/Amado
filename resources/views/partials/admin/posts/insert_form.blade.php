<div class="card mx-auto" style="width: 60%;">
    <div class="card-header">
        <div class="card-body card-block ">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data"  class="form-horizontal ">
                @csrf
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" name="description" placeholder="Insert description" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" name="name" placeholder="Insert post name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="email-input" name="price" placeholder="Insert prace" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12">
                        <input type="text" id="password-input" name="quantity" placeholder="Insert quantity" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <select name="brand" id="select" class="form-control">
                            <option value="0">Please select brand</option>
                            @foreach($brand as $b)
                                <option value="{{$b->id}}">{{$b->brand}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <select name="category" id="select" class="form-control">
                            <option value="0">Please select category</option>
                            @foreach($category as $c)
                                <option value="{{$c->id}}">{{$c->category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12">
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                </div>
                    <div class="col-2 ">
                        <button type="submit" class="btn btn-danger btn-outline-danger">
                            Insert
                        </button>
                    </div>


            </form>
        </div>
    </div>
</div>
