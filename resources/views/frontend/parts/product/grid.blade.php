<div class="grid">
    <div class="product-pic">
        <img src="{{ asset('/uploads/product') }}/{{ $products->thumbnail }}" height="200" width="200"alt="image_not_found" >

    </div>
    <div class="details">
        <h4><a href="#">{{ $products->name }}</a></h4>
        <p><a href="#">{{ $products->description }}</a></p>
        <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span class="price">
            <ins>
                <span class="woocommerce-Price-amount amount">
                    <bdi>
                        <span class="woocommerce-Price-currencySymbol">$</span>{{ $products->regular_price}}
                    </bdi>
                </span>
            </ins>
        </span>
        <div class="add-cart-area">
            <button class="add-to-cart">Add to cart</button>
        </div>
    </div>
</div>
