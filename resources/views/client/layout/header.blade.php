<div class="header section">

    <!-- Header Top Start -->
    <div class="header-top bg-light">
        <div class="container">
            <div class="row row-cols-xl-2 align-items-center">

                <!-- Header Top Language, Currency & Link Start -->
                <div class="col d-none d-lg-block">
                    <div class="header-top-lan-curr-link">
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Japanese</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Romanian</a></li>
                            </ul>
                        </div>
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">VND</a></li>
                            </ul>
                        </div>
                        <div class="header-top-links">
                            <span>Call Us</span><a href="#"> 0387509923</a>
                        </div>
                    </div>
                </div>
                <!-- Header Top Language, Currency & Link End -->

                <!-- Header Top Message Start -->
                <div class="col">
                    <p class="header-top-message">Kết thúc Thứ Hai: Giảm 100.000 VNĐ cho bất kỳ áo sơ mi nào. <a href="{{route('product_shop')}}">Shop Now</a></p>
                </div>
                <!-- Header Top Message End -->

            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="header-sticky">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col-xl-2 col-6">
                        <div class="header-logo">
                            <a href="{{url('/')}}"><img src="{{url('client/assets/images/logo/logo.png')}}" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-xl-8 d-none d-xl-block">
                        <div class="main-menu position-relative">
                            <ul>
                                <li class="has-children">
                                    <a href="{{url('/')}}"><span>Home</span></a>
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="index.html">Home 1</a></li>--}}
{{--                                        <li><a href="index-2.html">Home 2</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="has-children position-static">
                                    <a href="{{route('product_shop')}}"><span>Shop</span></a>
{{--                                    <ul class="mega-menu row-cols-4">--}}
{{--                                        <li class="col">--}}
{{--                                            <h4 class="mega-menu-title">Shop Layout</h4>--}}
{{--                                            <ul class="mb-n2">--}}
{{--                                                <li><a href="shop-grid.html">Shop Grid</a></li>--}}
{{--                                                <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>--}}
{{--                                                <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>--}}
{{--                                                <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>--}}
{{--                                                <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>--}}
{{--                                                <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="col">--}}
{{--                                            <h4 class="mega-menu-title">Product Layout</h4>--}}
{{--                                            <ul class="mb-n2">--}}
{{--                                                <li><a href="single-product.html">Single Product</a></li>--}}
{{--                                                <li><a href="single-product-sale.html">Single Product Sale</a></li>--}}
{{--                                                <li><a href="single-product-group.html">Single Product Group</a></li>--}}
{{--                                                <li><a href="single-product-normal.html">Single Product Normal</a></li>--}}
{{--                                                <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>--}}
{{--                                                <li><a href="single-product-slider.html">Single Product Slider</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="col">--}}
{{--                                            <h4 class="mega-menu-title">Product Layout</h4>--}}
{{--                                            <ul class="mb-n2">--}}
{{--                                                <li><a href="single-product-gallery-left.html">Gallery Left</a></li>--}}
{{--                                                <li><a href="single-product-gallery-right.html">Gallery Right</a></li>--}}
{{--                                                <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>--}}
{{--                                                <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>--}}
{{--                                                <li><a href="single-product-sticky-left.html">Sticky Left</a></li>--}}
{{--                                                <li><a href="single-product-sticky-right.html">Sticky Right</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="col">--}}
{{--                                            <h4 class="mega-menu-title">Other Pages</h4>--}}
{{--                                            <ul class="mb-n2">--}}
{{--                                                <li><a href="my-account.html">My Account</a></li>--}}
{{--                                                <li><a href="login-register.html">Loging | Register</a></li>--}}
{{--                                                <li><a href="wishlist.html">Wishlist</a></li>--}}
{{--                                                <li><a href="cart.html">Cart</a></li>--}}
{{--                                                <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                                <li><a href="compare.html">Compare</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="has-children">
                                    <a href="{{route('page_404')}}"><span>Pages</span></a>
                                </li>
                                <li class="has-children">
                                    <a href="{{route('blog_page')}}"><span>Blog</span></a>

                                </li>
                                <li><a href="{{route('contact_page')}}"> <span>Contact</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Action Start -->
                    <div class="col-xl-2 col-6">
                        <div class="header-actions">

                            <!-- Search Header Action Button Start -->
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-search"><i class="pe-7s-search"></i></a>
                            <!-- Search Header Action Button End -->

                            @if(Auth::check())
                                <!-- User Account Header Action Button Start -->
                                <a href="{{route('my_account')}}" class="header-action-btn d-none d-md-block"><i class="pe-7s-user"></i></a>
                                <!-- User Account Header Action Button End -->
                            @else
                            <!-- User Account Header Action Button Start -->
                            <a href="{{route('login')}}" class="header-action-btn d-none d-md-block"><i class="pe-7s-user"></i></a>
                            <!-- User Account Header Action Button End -->
                            @endif
                            <!-- Wishlist Header Action Button Start -->
                            <a href="wishlist.html" class="header-action-btn header-action-btn-wishlist d-none d-md-block">
                                <i class="pe-7s-like"></i>
                            </a>
                            <!-- Wishlist Header Action Button End -->

                            <!-- Shopping Cart Header Action Button Start -->
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                                <i class="pe-7s-shopbag"></i>
                                @if(\Illuminate\Support\Facades\Auth::check())
                                <?php
                                    $user = \Illuminate\Support\Facades\Auth::user();
                                    if ($user){
                                        $product = \Illuminate\Support\Facades\DB::table('carts')->where('id_user',$user->id)->where('status',0)->get();
                                        if ($product != ''){
                                            $total = count($product);
                                        }else{
                                            $total = 0;
                                        }
                                    }
                                ?>
                                    <span class="header-action-num">{{$total}}</span>
                                @endif
                            </a>
                            <!-- Shopping Cart Header Action Button End -->

                            <!-- Mobile Menu Hambarger Action Button Start -->
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!-- Mobile Menu Hambarger Action Button End -->

                        </div>
                    </div>
                    <!-- Header Action End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-navigation">
                <nav>
                    <ul class="mobile-menu">
                        <li class="has-children">
                            <a href="#">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="single-product.html">Single Product</a></li>
                                <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                <li><a href="single-product-group.html">Single Product Group</a></li>
                                <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                                <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                                <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="404-error.html">Error 404</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="login-register.html">Loging | Register</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu End -->

            <!-- Language, Currency & Link Start -->
            <div class="offcanvas-lag-curr mb-6">
                <h2 class="title">Languages</h2>
                <div class="header-top-lan-curr-link">
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Japanese</a></li>
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Romanian</a></li>
                        </ul>
                    </div>
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">USD</a></li>
                            <li><a class="dropdown-item" href="#">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Language, Currency & Link End -->

            <!-- Contact Links/Social Links Start -->
            <div class="mt-auto">

                <!-- Contact Links Start -->
                <ul class="contact-links">
                    <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789 123</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                    <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                </ul>
                <!-- Contact Links End -->

                <!-- Social Widget Start -->
                <div class="widget-social">
                    <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                    <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                    <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                </div>
                <!-- Social Widget Ende -->
            </div>
            <!-- Contact Links/Social Links End -->
        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Offcanvas Search Start -->
    <div class="offcanvas-search">
        <div class="offcanvas-search-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Offcanvas Search Form Start -->
            <form class="offcanvas-search-form" action="#">
                <input type="text" placeholder="Search Here..." class="offcanvas-search-input">
            </form>
            <!-- Offcanvas Search Form End -->

        </div>
    </div>
    <!-- Offcanvas Search End -->

    <!-- Cart Offcanvas Start -->
    <div class="cart-offcanvas-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Cart Offcanvas Inner Start -->
        <div class="cart-offcanvas-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Offcanvas Cart Content Start -->
            <div class="offcanvas-cart-content">
                <!-- Offcanvas Cart Title Start -->
                <h2 class="offcanvas-cart-title mb-10">Giỏ hàng</h2>
                <!-- Offcanvas Cart Title End -->

                @if(\Illuminate\Support\Facades\Auth::check())
                @foreach($product as $key => $value)
                <?php
                        $detail = \Illuminate\Support\Facades\DB::table('products')->where('id', $value->id_product)->first();
                        ?>
                <!-- Cart Product/Price Start -->
                <div class="cart-product-wrapper mb-6">

                    <!-- Single Cart Product Start -->
                    <div class="single-cart-product">
                        <div class="cart-product-thumb">
                            <a href="{{route('product_detail', [$detail->id])}}"><img src="{{asset('storage/'.json_decode($detail->image)[0])}}" alt="Cart Product"></a>
                        </div>
                        <div class="cart-product-content">
                            <h3 class="title"><a href="{{route('product_detail', [$detail->id])}}">{{$detail->name}}</a></h3>
                            <span class="price">
								<span class="new">{{number_format($detail->sale_price, 0, ',', '.')}} VNĐ</span>
                                <span class="old">{{number_format($detail->old_price, 0, ',', '.')}} VNĐ</span>
                                </span>
                        </div>
                    </div>
                    <!-- Single Cart Product End -->

                    <!-- Product Remove Start -->
                    <div class="cart-product-remove">
                        <a href="{{route('cart_delete',[$value->id])}}"><i class="fa fa-trash"></i></a>
                    </div>
                    <!-- Product Remove End -->

                </div>
                <!-- Cart Product/Price End -->
                @endforeach

                    @if(count($product) > 0)
                    <!-- Cart Product Total Start -->
                    <div class="cart-product-total">
                        <?php
                            $sum = 0;
                            for ($i = 0; $i < count($product); $i++){
                                $total = $product[$i]->price * $product[$i]->amount_product;
                                $sum += $total;
                            }

                            ?>
                        <span class="value">Tổng tiền</span>
                        <span class="price">{{number_format($sum, 0, ',', '.')}} VNĐ</span>
                    </div>
                    <!-- Cart Product Total End -->

                    <!-- Cart Product Button Start -->
                    <div class="cart-product-btn mt-4">
                        <a href="{{route('view_cart')}}" class="btn btn-dark btn-hover-primary rounded-0 w-100">Giỏ hàng</a>
                        <a href="{{route('checkout')}}" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-4">Thanh toán</a>
                    </div>
                    @else
                        <!-- Cart Product Total Start -->
                        <div class="cart-product-total">
                            <span class="value">Chưa có sản phẩm</span>
                        </div>
                        <!-- Cart Product Total End -->
                    @endif
                <!-- Cart Product Button End -->
                @endif
            </div>
            <!-- Offcanvas Cart Content End -->

        </div>
        <!-- Cart Offcanvas Inner End -->
    </div>
    <!-- Cart Offcanvas End -->

</div>

