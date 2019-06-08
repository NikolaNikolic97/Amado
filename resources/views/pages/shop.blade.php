@extends("layout.frontEnd")
@section('menuSearch')
    <a href="#" class="search-nav"><img src="{{asset('/')}}img/core-img/search.png" alt=""> Search</a>
@endsection
@section('search')
    @include('partials.shop.search')
@endsection
@section("mainContent")
        <div class="shop_sidebar_area">
            @include("partials.shop.category_menu")
            @include("partials.shop.brands")
            @include("partials.shop.price")
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">
                @include("partials.shop.filters")
                @include("partials.shop.posts")
                @include("partials.shop.pagination")
            </div>
        </div>
   </div>

@endsection
@section('scripts')
    <script src="{{asset('/')}}js/filtering.js"></script>
@endsection