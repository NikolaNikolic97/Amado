@extends("layout.frontEnd")
@section("mainContent")
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                @include("partials.checkout.checkout_form")
                @include("partials.checkout.cart_total")
            </div>
        </div>
    </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
@endsection