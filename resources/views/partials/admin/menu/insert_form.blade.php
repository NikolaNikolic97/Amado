<div class="card mx-auto" style="width: 60%;">
    <div class="card-header">
        <div class="card-body card-block ">
            <form action="{{route('menu.store')}}" method="post"  class="form-horizontal ">
                @csrf
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" name="href" placeholder="Insert name of route" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 ">
                        <input type="text" id="text-input" name="content" placeholder="Insert content" class="form-control">
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
