<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    @include('css')

</head>

<body>

<!--== Wrapper Start ==-->
<div class="wrapper">



    <!--== Start Product Details Area Wrapper ==-->

    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="offset-lg-6 col-lg-6">
                    <div class="section-title position-relative">
                        <h2 class="title">{{$results->name}}</h2>
                        <p class="m-0">{{$results->description}}</p>
                        <p class="m-0"><strong>Qte</strong>: {{$results->qte}}</p>
                        <p class="m-0"><strong>Price</strong>: {{$results->price}}MAD</p>
                        <p class="m-0"><strong>Total price</strong>: {{$results->total_price}}MAD</p>
                        <div class="line-left-style mt-4 mb-1"></div>
                    </div>
                    <!--== Start Contact Form ==-->
                    <div class="contact-form">
                        <form action="reservation_one" method="POST">
                            @csrf
                            <input type="number" value="{{$results->id}}" name="product_id" hidden  >
                            <input type="number" value="{{$results->qte}}" name="qte" hidden>
                            <input type="total_price" value="{{$results->total_price}}" name="total_price" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required class="form-control" type="text" name="first_name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required class="form-control" type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input required class="form-control" type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea required class="form-control" name="address" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-sm" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--== End Contact Form ==-->

                    <!--== Message Notification ==-->
                    <div class="form-message"></div>
                </div>
            </div>
        </div>
        <div class="contact-left-img" data-bg-img="assets/images/photos/contact.png"></div>
    </section>

    <!--== Start Footer Area Wrapper ==-->
    @include('footer')
    <!--== End Footer Area Wrapper ==-->

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



    <!--== Start Aside Menu ==-->
    @include('menu')
    <!--== End Aside Menu ==-->

</div>
<!--== Wrapper End ==-->

<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Vendors JS -->
@include('js')

</body>

</html>
