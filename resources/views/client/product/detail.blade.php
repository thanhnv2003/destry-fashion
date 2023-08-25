@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
@endpush
@section('content')

    <!-- Shop Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">

                    <!-- Product Details Image Start -->
                    <div class="product-details-img">

                        <!-- Single Product Image Start -->
                        <div class="single-product-img swiper-container gallery-top">
                            <div class="swiper-wrapper popup-gallery">
                                <a class="swiper-slide w-100" href="{{asset('storage/'.json_decode($data_product->image)[0])}}">
                                    <img class="w-100" src="{{asset('storage/'.json_decode($data_product->image)[0])}}" alt="Product 1">
                                </a>
                                <a class="swiper-slide w-100" href="{{asset('storage/'.json_decode($data_product->image)[1])}}">
                                    <img class="w-100" src="{{asset('storage/'.json_decode($data_product->image)[1])}}" alt="Product 2">
                                </a>
                                <a class="swiper-slide w-100" href="{{asset('storage/'.json_decode($data_product->image)[2])}}">
                                    <img class="w-100" src="{{asset('storage/'.json_decode($data_product->image)[2])}}" alt="Product 3">
                                </a>
                                <a class="swiper-slide w-100" href="{{asset('storage/'.json_decode($data_product->image)[3])}}">
                                    <img class="w-100" src="{{asset('storage/'.json_decode($data_product->image)[3])}}" alt="Product 4">
                                </a>
                                <a class="swiper-slide w-100" href="{{asset('storage/'.json_decode($data_product->image)[4])}}">
                                    <img class="w-100" src="{{asset('storage/'.json_decode($data_product->image)[4])}}" alt="Product 5">
                                </a>
                            </div>
                        </div>
                        <!-- Single Product Image End -->

                        <!-- Single Product Thumb Start -->
                        <div class="single-product-thumb swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('storage/'.json_decode($data_product->image)[0])}}" alt="Product 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('storage/'.json_decode($data_product->image)[1])}}" alt="Product 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('storage/'.json_decode($data_product->image)[2])}}" alt="Product 3">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('storage/'.json_decode($data_product->image)[3])}}" alt="Product 4">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('storage/'.json_decode($data_product->image)[4])}}" alt="Product 5">
                                </div>
                            </div>

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-next swiper-button-white"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-button-prev swiper-button-white"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>
                        <!-- Single Product Thumb End -->

                    </div>
                    <!-- Product Details Image End -->

                </div>

                    <div class="col-lg-7 col-custom">
                        <form action="{{route('add_to_cart')}}" method="post">
                            @csrf
                            <!-- Product Summery Start -->
                            <div class="product-summery position-relative">

                                <!-- Product Head Start -->
                                <div class="product-head mb-3">
                                    <h2 class="product-title">{{$data_product->name}}</h2>
                                </div>
                                <!-- Product Head End -->

                                <!-- Price Box Start -->
                                <div class="price-box mb-2">
                                    <span class="regular-price">{{number_format($data_product->sale_price, 0, ',', '.')}} VNĐ</span>
                                    <span class="old-price"><del>{{number_format($data_product->old_price, 0, ',', '.')}} VNĐ</del></span>
                                </div>
                                <!-- Price Box End -->

                                <!-- Rating Start -->
                                <span class="ratings justify-content-start">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                </span>
                                <!-- Rating End -->

                                <!-- Description Start -->
                                <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing
                                    pleasure and praising pain was born and I will give you a complete account of the system,
                                    and expound the actual teachings of the great explorer of the truth, the master-builder of
                                    human happiness.</p>
                                <!-- Description End -->

                                <!-- Quantity Start -->
                                <div class="quantity mb-5">
                                    <div class="cart-plus-minus">
                                        <input name="amount" class="cart-plus-minus-box" value="0" type="text" max="{{$data_product->amount}}">
                                        <div class="dec qtybutton"></div>
                                        <div class="inc qtybutton"></div>
                                    </div>
                                </div>
                                <!-- Quantity End -->

                                <!-- Cart & Wishlist Button Start -->
                                @if($user_check == true )
                                <div class="cart-wishlist-btn mb-4">


                                        <input type="hidden" name="data_product" value="{{json_encode($data_product)}}">
                                    @if($data_product->amount > 0)
                                        <div class="add-to_cart">
                                            <button type="submit" class="btn btn-outline-dark btn-hover-primary" >Thêm vào giỏ hàng</button>
                                        </div>
                                    @endif
                                    <div class="add-to-wishlist">
                                        <a class="btn btn-outline-dark btn-hover-primary" href="#">Thêm vào yêu thích</a>
                                    </div>
                                </div>
                                @endif
                                <!-- Cart & Wishlist Button End -->

                                <!-- Social Shear Start -->
                                <div class="social-share">
                                    <span>Chia sẻ :</span>
                                    <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                                    <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                                </div>
                                <!-- Social Shear End -->

                                <!-- Product Delivery Policy Start -->
                                <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                                    <li> <i class="fa fa-check-square"></i> <span>Chính sách bảo mật</span></li>
                                    <li><i class="fa fa-truck"></i><span>Chính sách giao hàng</span></li>
                                    <li><i class="fa fa-refresh"></i><span>Chính sách trả hàng</span></li>
                                </ul>
                                <!-- Product Delivery Policy End -->

                            </div>
                            <!-- Product Summery End -->
                        </form>
                </div>

            </div>

            <div class="row section-margin">
                <!-- Single Product Tab Start -->
                <div class="col-lg-12 col-custom single-product-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab"
                               href="#connect-1" role="tab" aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#connect-2"
                               role="tab" aria-selected="false">Bình luận</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3"
                               role="tab" aria-selected="false">Chính sách giao hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="review-tab" data-bs-toggle="tab" href="#connect-4"
                               role="tab" aria-selected="false">Kích cỡ</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel"
                             aria-labelledby="home-tab">
                            <div class="desc-content border p-3">
                                {!!$data_product->description!!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="product_tab_content  border p-3">
                                <!-- Start Single Review -->
                                <div class="single-review d-flex mb-4">

                                    <!-- Review Thumb Start -->
                                    <div class="review_thumb">
                                        <img alt="review images" src="assets/images/review/1.jpg">
                                    </div>
                                    <!-- Review Thumb End -->

                                    <!-- Review Details Start -->
                                    <div class="review_details">
                                        <div class="review_info mb-2">

                                            <!-- Rating Start -->
                                            <span class="ratings justify-content-start mb-3">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">(1)</span>
                                            </span>
                                            <!-- Rating End -->

                                            <!-- Review Title & Date Start -->
                                            <div class="review-title-date d-flex">
                                                <h5 class="title">Admin - </h5><span> January 19, 2023</span>
                                            </div>
                                            <!-- Review Title & Date End -->

                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex,
                                            vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus
                                            libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel.
                                            Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit
                                            amet quam tincidunt iaculis.</p>
                                    </div>
                                    <!-- Review Details End -->

                                </div>
                                <!-- End Single Review -->

                                <!-- Rating Wrap Start -->
                                <div class="rating_wrap">
                                    <h5 class="rating-title mb-2">Add a review </h5>
                                    <p class="mb-2">Your email address will not be published. Required fields are marked
                                        *</p>
                                    <h6 class="rating-sub-title mb-2">Your Rating</h6>

                                    <!-- Rating Start -->
                                    <span class="ratings justify-content-start mb-3">
                                        <span class="rating-wrap">
                                            <span class="star" style="width: 100%"></span>
                                        </span>
                                        <span class="rating-num">(2)</span>
                                    </span>
                                    <!-- Rating End -->

                                </div>
                                <!-- Rating Wrap End -->

                                <!-- Comments ans Replay Start -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-custom">

                                            <!-- Comment form Start -->
                                            <form action="#" class="comment-form-area">
                                                <div class="row comment-input">

                                                    <!-- Input Name Start -->
                                                    <div class="col-md-6 col-custom comment-form-author mb-3">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input type="text" required="required" name="Name">
                                                    </div>
                                                    <!-- Input Name End -->

                                                    <!-- Input Email Start -->
                                                    <div class="col-md-6 col-custom comment-form-emai mb-3">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="text" required="required" name="email">
                                                    </div>
                                                    <!-- Input Email End -->

                                                </div>
                                                <!-- Comment Texarea Start -->
                                                <div class="comment-form-comment mb-3">
                                                    <label>Comment</label>
                                                    <textarea class="comment-notes" required="required"></textarea>
                                                </div>
                                                <!-- Comment Texarea End -->

                                                <!-- Comment Submit Button Start -->
                                                <div class="comment-form-submit">
                                                    <button class="btn btn-dark btn-hover-primary">Submit</button>
                                                </div>
                                                <!-- Comment Submit Button End -->

                                            </form>
                                            <!-- Comment form End -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Comments ans Replay End -->

                            </div>
                            <!-- End Single Content -->
                        </div>
                        <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- Shipping Policy Start -->
                            <div class="shipping-policy mb-n2">
                                <h4 class="title-3 mb-4">Shipping policy for our store</h4>
                                <p class="desc-content mb-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor in hendrerit in vulputate</p>
                                <ul class="policy-list mb-2">
                                    <li>1-2 business days (Typically by end of day)</li>
                                    <li><a href="#">30 days money back guaranty</a></li>
                                    <li>24/7 live support</li>
                                    <li>odio dignissim qui blandit praesent</li>
                                    <li>luptatum zzril delenit augue duis dolore</li>
                                    <li>te feugait nulla facilisi.</li>
                                </ul>
                                <p class="desc-content mb-2">Nam liber tempor cum soluta nobis eleifend option congue
                                    nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent
                                    claritatem insitam; est usus legentis in iis qui facit eorum</p>
                                <p class="desc-content mb-2">claritatem. Investigationes demonstraverunt lectores legere
                                    me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur
                                    mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc
                                    putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                                <p class="desc-content mb-2">seacula quarta decima et quinta decima. Eodem modo typi,
                                    qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                            <!-- Shipping Policy End -->
                        </div>
                        <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="size-tab table-responsive-lg">
                                <h4 class="title-3 mb-4">Size Chart</h4>
                                <table class="table border mb-0">
                                    <tbody>
                                    <tr>
                                        <td class="cun-name"><span>UK</span></td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                        <td>24</td>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>European</span></td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                        <td>52</td>
                                        <td>54</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>usa</span></td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Australia</span></td>
                                        <td>28</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Canada</span></td>
                                        <td>24</td>
                                        <td>18</td>
                                        <td>14</td>
                                        <td>42</td>
                                        <td>36</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product Tab End -->
            </div>

            <!-- Products Start -->
            <div class="row">

                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title pb-3">Bạn cũng có thể thích</h2>
                        <span></span>
                        <div class="title-border-bottom"></div>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col">
                    <div class="product-carousel">

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($data_like as $key => $value)
                                <!-- Product Start -->
                                <div class="swiper-slide product-wrapper">

                                    <!-- Single Product Start -->
                                    <div class="product product-border-left" data-aos="fade-up" data-aos-delay="300">
                                        <div class="thumb">
                                            <a href="{{route('product_detail', [$value->id])}}" class="image">
                                                <img class="first-image" src="{{asset('storage/'.json_decode($value->image)[0])}}"
                                                     alt="Product" />
                                                <img class="second-image" src="{{asset('storage/'.json_decode($value->image)[1])}}"
                                                     alt="Product" />
                                            </a>
                                            <div class="actions">
                                                <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="#" class="action quickview" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalCenter"><i
                                                        class="pe-7s-search"></i></a>
                                                <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="content">
                                                <?php $brands = \App\Models\brands::find($value->id_brands)
                                                ?>
                                            <h4 class="sub-title"><a href="{{route('product_detail', [$value->id])}}">{{$brands->name}}</a></h4>
                                            <h5 class="title"><a href="{{route('product_detail', [$value->id])}}">{{$value->name}}</a>
                                            </h5>
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price">
                                                <span class="new">{{number_format($value->sale_price, 0, ',', '.')}} VNĐ</span>
                                                <span class="old">{{number_format($value->old_price, 0, ',', '.')}} VNĐ</span>
                                            </span>
                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                </div>
                                <!-- Product End -->
                                @endforeach
                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-md-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div
                                class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                                <i class="pe-7s-angle-right"></i></div>
                            <div
                                class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                <i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>

                    </div>
                </div>

            </div>
            <!-- Products End -->

        </div>
    </div>
    <!-- Shop Section End -->

@endsection
