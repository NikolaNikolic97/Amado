@extends("layout.frontEnd")
@section("mainContent")
    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            @foreach($posts as $post)
            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
            <a href="{{route('posts',['id'=>$post->id_post])}}">
                @foreach($images as $i)
                    @if($post->id_post == $i->id_post)
                        <img src="{{$i->src}}" alt="{{$post->name}}">
                        @break
                    @endif
                @endforeach
            <!-- Hover Content -->
            <div class="hover-content">
            <div class="line"></div>
            <p>From {{$post->price}}</p>
            <h4>{{$post->name}}</h4>
            </div>
            </a>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Product Catagories Area End -->
@endsection