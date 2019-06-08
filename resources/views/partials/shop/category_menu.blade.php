<!-- ##### Single Widget ##### -->
<div class="widget brands mb-50">
    <!-- Widget Title -->
    <h6 class="widget-title mb-30">Catagories</h6>

    <!--  Catagories  -->
            @foreach($categories as $c)
                <div class="widget-desc">
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input category" type="checkbox" name="categories" value="{{$c->id}}" id="{{$c->category}}">
                        <label class="form-check-label " for="{{$c->category}}">{{$c->category}}</label>
                    </div>
                </div>
            @endforeach
</div>