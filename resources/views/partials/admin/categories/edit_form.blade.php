<div class="card mx-auto" style="width: 60%;">
    <div class="card-header">
        <div class="card-body card-block ">
            <form action="{{route('categories.update',['id'=>$category->id])}}" method="post"  class="form-horizontal ">
                @method('put')
                @csrf
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input"  value="{{$category->category}}" name="category"  class="form-control">
                    </div>
                </div>
                <div class="col-2 ">
                    <button class="btn btn-danger btn-outline-danger">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
