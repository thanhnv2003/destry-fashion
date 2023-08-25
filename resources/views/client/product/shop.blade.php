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
                <div class="col-lg-9 col-12 col-custom">

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper flex-column flex-md-row mb-10">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-top-bar-left mb-md-0 mb-2">
                            <div class="shop-top-show">
                                <span>Hiển thị 1–{{$data->count()}} trên {{$data->total()}} kết quả</span>
                            </div>
                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">


                            <div class="shop-short-by mr-4">
                                <select class="nice-select" aria-label=".form-select-sm example">
                                    <option selected>Mặc định</option>
                                    <option value="1">Mức độ phổ biến</option>
                                    <option value="2">Xếp hạng</option>
                                    <option value="3">Mới nhất</option>
                                    <option value="3">Giá cao dần</option>
                                    <option value="3">Giá thấp dần</option>
                                </select>
                            </div>

                            <div class="shop_toolbar_btn">
                                <button data-role="grid_3" type="button" class="active btn-grid-4" title="Grid"><i class="fa fa-th"></i></button>
                                <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_3">

                        @foreach($data as $key => $value)
                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="{{route('product_detail', [$value['id']])}}" class="image">
                                        <img class="first-image" src="{{asset('storage/'.json_decode($value['image'])[0])}}" alt="Product 1" />
                                        <img class="second-image" src="{{asset('storage/'.json_decode($value['image'])[1])}}" alt="Product 2" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                        <?php $brands = \App\Models\brands::find($value['id_brands'])
                                        ?>
                                    <h4 class="sub-title"><a href="{{route('product_detail', [$value['id']])}}">{{$brands->name}}</a></h4>
                                    <h5 class="title"><a href="{{route('product_detail', [$value['id']])}}">{{$value['name']}}</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>{!! $value['description'] !!}</p>
                                    <span class="price">
                                            <span class="new">{{number_format($value['sale_price'], 0, ',', '.')}} VNĐ</span>
                                    <span class="old">{{number_format($value['old_price'], 0, ',', '.')}} VNĐ</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        @if($user_check == true )
                                            <form action="{{route('add_to_cart')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="amount" value="1">
                                                <input type="hidden" name="data_product" value="{{json_encode($value)}}">
                                                <button type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button>
                                            </form>
                                        @endif
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        @endforeach

                    </div>
                    <!-- Shop Wrapper End -->

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper mt-10">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-top-bar-left">
{{--                            <div class="shop-short-by mr-4">--}}
{{--                                <select class="nice-select rounded-0" aria-label=".form-select-sm example">--}}
{{--                                    <option selected>Show 12 Per Page</option>--}}
{{--                                    <option value="1">Show 12 Per Page</option>--}}
{{--                                    <option value="2">Show 24 Per Page</option>--}}
{{--                                    <option value="3">Show 15 Per Page</option>--}}
{{--                                    <option value="3">Show 30 Per Page</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="{{$data->previousPageUrl()}}" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>

                                    @foreach($data->links()->elements[0] as $key => $value)
                                    <li class="page-item"><a class="page-link {{url($_SERVER['REQUEST_URI']) == $value ? 'active' : ''}}" href="{{$value}}">{{$key}}</a></li>
                                    @endforeach
                                    <li class="page-item">
                                        <a class="page-link" href="{{$data->nextPageUrl()}}" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                </div>
                <div class="col-lg-3 col-12 col-custom">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget mt-10 mt-lg-0">
                        <div class="widget_inner" data-aos="fade-up" data-aos-delay="200">
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-4">Tìm kiếm</h3>
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Search Our Store" aria-label="Search Our Store">
                                    <button class="btn btn-dark btn-hover-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-4">Menu Categories</h3>
                                <!-- Widget Menu Start -->
                                <nav>
                                    <ul class="category-menu mb-n3">
                                        @foreach($data_categories as $key => $value)
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">{{$value->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </nav>
                                <!-- Widget Menu End -->
                            </div>

                            <div class="widget-list">
                                <h3 class="widget-title mb-4">Recent Products</h3>
                                <div class="sidebar-body product-list-wrapper mb-n6">
                                    @foreach($data_recent as $key => $value)
                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="{{route('product_detail', [$value->id])}}" class="image">
                                                <img class="first-image" src="{{asset('storage/'.json_decode($value->image)[0])}}" alt="Product 1" />
                                                <img class="second-image" src="{{asset('storage/'.json_decode($value->image)[1])}}" alt="Product 2" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('product_detail', [$value->id])}}">{{$value->name}}</a></h5>
                                            <span class="price">
													<span class="new">{{number_format($value->sale_price, 0, ',', '.')}} VNĐ</span>
                                            <span class="old">{{number_format($value->old_price, 0, ',', '.')}} VNĐ</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->

@endsection
