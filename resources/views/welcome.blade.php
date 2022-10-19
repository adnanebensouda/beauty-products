<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    @include('css')
</head>

<body>

<!--== Wrapper Start ==-->
<div class="wrapper">

    @include('nav')

    <main class="main-content" style="padding-bottom:  7rem;">

        <!--== Start Hero Area Wrapper ==-->
        <section class="hero-slider-area position-relative">
            <div class="swiper hero-slider-container">
                <div class="swiper-wrapper">

                    @foreach( $top_product as $p)

                        <div class="swiper-slide hero-slide-item">
                            <div class="container">
                                <div class="row align-items-center position-relative">
                                    <div class="col-12 col-md-6">
                                        <div class="hero-slide-content">
                                            <div class="hero-slide-text-img"><img src="assets/images/slider/text-theme.webp"
                                                                                  width="427" height="232" alt="Image">
                                            </div>
                                            <h2 class="hero-slide-title">{{$p->name}}</h2>
{{--                                            <p class="hero-slide-desc">{{$p->description}}</p>--}}
                                            <a class="btn btn-border-dark" href="/products/{{$p->slug}}">اشتري الآن</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="hero-slide-thumb">
                                            <img style="border-radius:10%" src="{{$p->img}}" width="841" height="832"
                                                 alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-slide-text-shape"><img src="assets/images/slider/text1.webp" width="70"
                                                                    height="955" alt="Image"></div>
                            <div class="hero-slide-social-shape"></div>
                        </div>

                    @endforeach

                </div>
                <!--== Add Pagination ==-->
                <div class="hero-slider-pagination"></div>
            </div>
            <div class="hero-slide-social-media">
                <a href="https://www.instagram.com/nejema.store/" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a>
                <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
            </div>
        </section>
        <!--== End Hero Area Wrapper ==-->

        <!--== Start Product Category Area Wrapper ==-->
        <section class="section-space pb-0" id="categories">
            <div class="container">
                <div class="row g-3 g-sm-6">


                    @foreach ($categories as $category)

                        <div class="col-6 col-lg-4 col-lg-3 col-xl-3">
                            <!--== Start Product Category Item ==-->
                            <a href="category/{{$category->id}}" class="product-category-item"
                               data-bg-color="{{$category->bg_color}}">
                                <img class="icon" src="{{$category->img}}" width="70" height="80" alt="Image-HasTech">
                                <h3 class="title">{{$category->name}}</h3>
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!--== End Product Category Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">أهم المنتجات</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">


                    @foreach($products as $product)
                        <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="/products/{{$product->slug}}">
                                        <img src="{{$product->img}}" width="370" height="450" alt="Image-HasTech">
                                    </a>

                                </div>
                                <div class="product-info">

                                    <h4 class="title"><a href="/products/{{$product->slug}}">{{$product->name}}</a></h4>
                                    <div class="prices">
                                        <span class="price">{{$product->price}} MAD</span>
                                        <span class="price-old">{{$product->price + 67}} MAD</span>
                                    </div>
                                </div>

                            </div>
                            <!--== End prPduct Item ==-->
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->


    </main>

    @include('footer')

    <!--== Scroll Top Button ==-->
    <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

    <!--== Start Product Quick Wishlist Modal ==-->
    <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-action-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                        <div class="modal-action-messages">
                            <i class="fa fa-check-square-o"></i> Added to wishlist successfully!
                        </div>
                        <div class="modal-action-product">
                            <div class="thumb">
                                <img src="assets/images/shop/modal1.webp" alt="Organic Food Juice" width="466"
                                     height="320">
                            </div>
                            <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Wishlist Modal ==-->

    <!--== Start Product Quick Add Cart Modal ==-->
    <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-action-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                        <div class="modal-action-messages">
                            <i class="fa fa-check-square-o"></i> Added to cart successfully!
                        </div>
                        <div class="modal-action-product">
                            <div class="thumb">
                                <img src="assets/images/shop/modal1.webp" alt="Organic Food Juice" width="466"
                                     height="320">
                            </div>
                            <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Add Cart Modal ==-->

    <!--== Start Aside Search Form ==-->
    <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch"
           aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fa fa-close"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="container pt--0 pb--0">
                <div class="search-box-form-wrap">
                    <div class="search-note">
                        <p>Start typing and press Enter to search</p>
                    </div>
                    <form action="#" method="post">
                        <div class="aside-search-form position-relative">
                            <label for="SearchInput" class="visually-hidden">Search</label>
                            <input id="SearchInput" type="search" class="form-control"
                                   placeholder="Search entire store…">
                            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Aside Search Form ==-->

    <!--== Start Product Quick View Modal ==-->
    <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-quick-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span class="fa fa-close"></span>
                        </button>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--== Start Product Thumbnail Area ==-->
                                    <div class="product-single-thumb">
                                        <img src="assets/images/shop/quick-view1.webp" width="544" height="560"
                                             alt="Image-HasTech">
                                    </div>
                                    <!--== End Product Thumbnail Area ==-->
                                </div>
                                <div class="col-lg-6">
                                    <!--== Start Product Info Area ==-->
                                    <div class="product-details-content">
                                        <h5 class="product-details-collection">Premioum collection</h5>
                                        <h3 class="product-details-title">Offbline Instant Age Rewind Eraser.</h3>
                                        <div class="product-details-review mb-5">
                                            <div class="product-review-icon">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <button type="button" class="product-review-show">150 reviews</button>
                                        </div>
                                        <p class="mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Delectus, repellendus. Nam voluptate illo ut quia non sapiente provident
                                            alias quos laborum incidunt, earum accusamus, natus. Vero pariatur ut veniam
                                            sequi amet consectetur.</p>
                                        <div class="product-details-pro-qty">
                                            <div class="pro-qty">
                                                <input type="text" title="Quantity" value="01">
                                            </div>
                                        </div>
                                        <div class="product-details-action">
                                            <h4 class="price">$254.22</h4>
                                            <div class="product-details-cart-wishlist">
                                                <button type="button" class="btn" data-bs-toggle="modal"
                                                        data-bs-target="#action-CartAddModal">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Info Area ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick View Modal ==-->

    @include('cart')

    <!--== Start Aside Menu ==-->
    @include('menu')
    <!--== End Aside Menu ==-->

</div>
<!--== Wrapper End ==-->

@include('js')

</body>

</html>
