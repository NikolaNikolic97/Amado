<div class="card mx-auto" style="width: 60%;">
    <div class="card-header">
        <div class="card-body card-block ">
            <form action="{{route('categories.store')}}" method="post"  class="form-horizontal ">
                @csrf
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" name="category" placeholder="Insert name of category" class="form-control">
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
