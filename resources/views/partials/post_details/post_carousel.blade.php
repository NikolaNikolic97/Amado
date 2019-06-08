<div class="col-12 col-lg-7">
    <div class="single_product_thumb">
        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($images as $i)
                <li class="active" data-target="#product_details_slider" data-slide-to="{{$loop->index}}" style="background-image: url({{$i->src}});">
                </li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($images as $i)
                    @if($loop->first)
                <div class="carousel-item active">
                    <a class="gallery_img" href="{{$i->src}}">
                        <img style="height: 30rem;" class="d-block w-100" src="{{$i->src}}" alt="First slide">
                    </a>
                </div>
                    @else
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{$i->src}}">
                                    <img style="height: 30rem;" class="d-block w-100" src="{{$i->src}}" alt="First slide">
                                </a>
                            </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>