<!-- ##### Single Widget ##### -->
<div class="widget brands mb-50">
    <!-- Widget Title -->
    <h6 class="widget-title mb-30">Brands</h6>
    @foreach($brands as $b)
        <div class="widget-desc">
            <!-- Single Form Check -->
            <div class="form-check">
                <input class="form-check-input " name="brands" type="checkbox" value="{{$b->id}}" id="{{$b->brand}}">
                <label class="form-check-label" for="{{$b->brand}}">{{$b->brand}}</label>
            </div>
        </div>
    @endforeach
</div>