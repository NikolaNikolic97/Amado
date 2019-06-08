<!-- Add to Cart Form -->
@if(session()->has('user'))
<form class="cart clearfix"  method="post">


    <a  href="{{route('addToCart',['id'=>$posts->id_post])}}" type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</a>
        @else
    <p style="color: #fbb710">
        To order you have to be the logged in
    </p>
    @endif
</form>
</div>
</div>