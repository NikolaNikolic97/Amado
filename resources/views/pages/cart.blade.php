@extends("layout.frontEnd")
@section("mainContent")
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    @include("partials.cart.cart_table")
                    @include("partials.cart.cart_total")
                </div>
            </div>
        </div>
    </div> <!-- ##### Main Content Wrapper End ##### -->
@endsection
@section('scripts')
    <script src="{{asset('/')}}js/checkout.js"></script>
@endsection
