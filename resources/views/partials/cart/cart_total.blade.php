<div class="col-12 col-lg-4">
    <div class="cart-summary">
        <h5>Cart Total</h5>
        @if(\Illuminate\Support\Facades\Session::has('cart'))
        <ul class="summary-table">
            <li><span>subtotal:</span> <span>${{$totalPrice}}</span></li>
            <li><span>delivery:</span> <span>Free</span></li>
            <li><span>total:</span> <span>${{$totalPrice}}</span></li>
        </ul>
            @else
            <ul class="summary-table">
                <li><span>subtotal:</span> <span>0</span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>total:</span> <span>0</span></li>
            </ul>
        @endif
        <div class="cart-btn mt-100">
                <a href="#" id="checkoutBtn" class="btn amado-btn w-100">Checkout</a>
        </div>
    </div>
</div>