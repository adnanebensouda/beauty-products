<!--== Start Aside Cart ==-->
<aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h1 class="d-none" id="offcanvasRightLabel">عربة التسوق</h1>
        <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">عربة التسوق <i class="fa fa-chevron-right"></i></button>
    </div>


    <div class="offcanvas-body">
        <ul class="aside-cart-product-list">
            @foreach( session()->get('cart' , []) as $id => $cart)
                <li class="aside-product-list-item">
                    <a href="/delete_item/{{$id}}" class="remove">×</a>
                    <a >
                        <img src="{{$cart['img']}}" width="68" height="84" alt="Image">
                        <span class="product-title">{{$cart['name']}}</span>
                    </a>
                    <span class="product-price">{{$cart['qte']}} × {{$cart['price']}}</span>
                </li>
            @endforeach
        </ul>
        <a class="btn-total" href="/checkout_multiple">اشتري الآن</a>
    </div>
</aside>
<!--== End Aside Cart ==-->
