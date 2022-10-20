<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    @include('css')
</head>

<body>

<!--== Wrapper Start ==-->
<div class="wrapper">

    <header class="header-area sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 col-sm-6 col-lg-3">
                    <div class="header-logo">
                        <a href="/">
                            <img class="logo-main" src="{{asset("assets/images/logo.png")}}" width="95" height="68" alt="Logo"/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="header-navigation">
                        <ul class="main-nav justify-content-center">
                            <li class="has-submenu"><a href="/">home</a></li>
                            <li class="has-submenu position-static"><a href="#categories">categories</a></li>
                            <li><a href="/about">about</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-7 col-sm-6 col-lg-3">
                    <div class="header-action justify-content-end">
                        <button class="header-action-btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                            <span class="icon">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                   xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect class="icon-rect" width="30" height="30" fill="url(#pattern2)"/>
                <defs>
                  <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_504:9" transform="scale(0.0333333)"/>
                  </pattern>
                  <image id="image0_504:9" width="30" height="30" xlink:href=""/>
                </defs>
              </svg>
            </span>
                        </button>

                        <button class="header-menu-btn" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->
    <!--== End Header Wrapper ==-->

    <main class="main-content">
        <!--== Start Faq Area Wrapper ==-->
        <section class="page-not-found-area">
            <div class="container">
                <div class="page-not-found">
                    <img src="assets/images/photos/giphy.gif" width="500" height="538" alt="Image">
                    <div class="alert alert-success" role="alert">
                        <h4 class="title">لقد اكتمل الحجز الخاص بك بنجاح</h4>
                    </div>

                    <h5 class="back-btn">Go to <a href="/">Home</a> Page</h5>
                </div>
            </div>
        </section>
        <!--== End Faq Area Wrapper ==-->
    </main>

    <!--== Start Footer Area Wrapper ==-->
    @include('footer')
        <!--== End Footer Main ==-->

        <!--== Start Footer Bottom ==-->
        <div class="footer-bottom">
            <div class="container pt-0 pb-0">
                <div class="footer-bottom-content">
                    <p class="copyright">© 2022 Brancy. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://themeforest.net/user/codecarnival">Codecarnival.</a></p>
                </div>
            </div>
        </div>
        <!--== End Footer Bottom ==-->
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

   @include('cart')

</div>
<!--== Wrapper End ==-->
@include('js')

</body>

</html>
