<div class="col-12 col-lg-5">
    <div class="single_product_desc">
        <!-- Product Meta Data -->
        <div class="product-meta-data">
            <div class="line"></div>
            <p class="product-price">${{$posts->price}}</p>
                <h2>
                    {{$posts->name}}
                </h2>
            @if($posts->quantity >= 1)
            <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
            @else
            <p><i class="fa fa-circle"></i> In Stock</p>
            @endif
        </div>

        <div class="short_overview my-5">
            <p>
                {{$posts->description}}
            </p>
        </div>