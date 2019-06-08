@extends("layout.frontEnd")
@section("mainContent")
    <!-- Product Details Area Start -->
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">
            @include("partials.post_details.breadcrumb")
            <div class="row">
                @include("partials.post_details.post_carousel")
                @include("partials.post_details.post_details")
                @include("partials.post_details.form_add_card")
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

@endsection