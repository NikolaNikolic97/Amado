<div class="col-12 col-lg-8">
    <div class="cart-title mt-50">
        <h2>Shopping Cart</h2>
    </div>

    <div class="cart-table clearfix">
        @if(\Illuminate\Support\Facades\Session::has('cart'))
        @if(count($products) > 0)
        <table class="table table-responsive">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {{--{{dd(array_keys($products))}}--}}
            @foreach($products as $product)
                <tr>
                    <td class="cart_product_img">
                        @foreach($images as $img)
                            @if($product['item']->id_post == $img->id_post)
                                <a href="{{route('posts',['id'=>$product['item']->id_post])}}">
                                    <img src="{{$img->src}}" alt="{{$img->alt}}">
                                </a>
                                @break;
                            @endif
                        @endforeach
                    </td>
                    <td class="cart_product_desc">
                        <h5>{{$product['item']->name}}</h5>
                    </td>
                    <td class="price">
                        <span>${{$product['price']}}</span>
                    </td>
                    <td class="qty">
                        <div class="qty-btn d-flex">
                            <p id="quantity" >{{$product['qty']}}</p>
                        </div>
                    </td>
                    <td class="price" >
                        <a href="{{route('deleteFromCart',['id'=>$product['item']->id_post])}}">
                            <i class="fas fa-trash-alt fa-2x"></i>
                        </a>
                    </td>
                    <input type="hidden" class="post_id" value="{{$product['item']->id_post}}">
                </tr>
            @endforeach
            <input type="hidden" id="user_id" value="{{\Illuminate\Support\Facades\Session::get('user')->id_user}}">
            </tbody>
        </table>
            @else
            <div class="col-12 ">
                <div class="cart-summary">
                    <p>
                        You have nothing in cart
                    </p>
                </div>
            </div>
       @endif
            @else
            <div class="col-12 ">
                <div class="cart-summary">
                    <p>
                        You have nothing in cart
                    </p>
                </div>
            </div>
            @endif
    </div>
</div>