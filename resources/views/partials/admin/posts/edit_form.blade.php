<div class="card mx-auto" style="width: 60%;">
    <div class="card-header">
        <div class="card-body card-block ">
            <form action="{{route('posts.update',['id'=>$posts->id])}}" method="post" class="form-horizontal ">
                @method('put')
                @csrf
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" value="{{$posts->description}}" name="description" placeholder="Insert description" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" value="{{$posts->name}}" name="name" placeholder="Insert post name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="email-input" value="{{$posts->price}}" name="price" placeholder="Insert prace" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12">
                        <input type="text" id="password-input" value="{{$posts->quantity}}" name="quantity" placeholder="Insert quantity" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <select name="brand" id="select" class="form-control">
                            @foreach($brand as $b)
                                @if($posts->id==$b->id)
                                <option selected value="{{$b->id}}">{{$b->brand}}</option>
                                    @else <option  value="{{$b->id}}">{{$b->brand}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <select  name="category" id="select" class="form-control">
                            @foreach($category as $c)
                                @if($posts->id == $c->id)
                                <option selected  value="{{$c->id}}">{{$c->category}}</option>
                                    @else <option value="{{$c->id}}">{{$c->category}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-2 ">
                    <button type="submit" class="btn btn-danger btn-outline-danger">
                        Update
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>
