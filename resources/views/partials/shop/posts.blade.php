<div class="row" id="posts">
    <!-- Single Product Area -->
    @foreach($posts as $p)
    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
            <div class="single-product-wrapper">
                <!-- Product Image -->
                <div class="product-img">
                    @foreach($images as $i)
                        @if($p->id_post == $i->id_post)
                            <a href="{{route('posts',['id'=>$p->id_post])}}">
                                <img src="{{$i->src}}" alt="{{$i->alt}}">
                            </a>
                        @break
                    <!-- Hover Thumb -->
                    {{--<img class="hover-img" src="img/product-img/product2.jpg" alt="">--}}
                        @endif
                    @endforeach
                </div>

                <!-- Product Description -->
                <div class="product-description d-flex align-items-center justify-content-between">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">${{$p->price}}</p>
                        <a href="{{route('posts',['id'=>$p->id_post])}}">
                            <h6>{{$p->name}}</h6>
                        </a>
                    </div>
                    <!-- Ratings & Cart -->
                    @if(session()->has('user'))
                    <div class="ratings-cart ">
                        <div class="cart">
                            <a href="{{route('addToCart',['id'=>$p->id_post])}}" data-toggle="tooltip" data-placement="left" title="Add to Cart">
                                <img src="{{asset('/')}}img/core-img/cart.png" alt="">
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
    </div>
    @endforeach
</div>