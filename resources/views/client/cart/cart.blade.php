@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush
@section('content')
<!-- Shopping Cart Section Start -->
<div class="section section-margin">
    <div class="container">
        @include('client.layout.errors')
        <div class="row">
            <div class="col-12">

                <!-- Cart Table Start -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">

                        <!-- Table Head Start -->
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Ảnh</th>
                            <th class="pro-title">Sản phẩm</th>
                            <th class="pro-price">Giá</th>
                            <th class="pro-quantity">Số lượng</th>
                            <th class="pro-subtotal">Tổng</th>
                            <th class="pro-remove">Xóa</th>
                        </tr>
                        </thead>
                        <!-- Table Head End -->

                        <!-- Table Body Start -->
                        <tbody>
                        @foreach($product as $value)
                            <?php
                                $detail = \Illuminate\Support\Facades\DB::table('products')->where('id', $value->id_product)->first();
                                ?>
                        <tr>
                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                                       src="{{asset('storage/'.json_decode($detail->image)[0])}}" alt="Product" /></a>
                            </td>
                            <td class="pro-title"><a href="#">{{$detail->name}}</a></td>
                            <td class="pro-price"><span>{{number_format($value->price, 0, ',', '.')}} VNĐ</span></td>
                            <td class="pro-quantity">
                                <div class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="{{$value->amount_product}}" type="text">
                                        </div>
                                </div>
                            </td>
                            <td class="pro-subtotal"><span>{{number_format($value->price * $value->amount_product, 0, ',', '.')}} VNĐ</span></td>
                            <td class="pro-remove"><a href="{{route('cart_delete',[$value->id])}}"><i class="pe-7s-trash"></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                        <!-- Table Body End -->

                    </table>
                </div>
                <!-- Cart Table End -->

                <!-- Cart Update Option Start -->
                <div class="cart-update-option d-block d-md-flex justify-content-between">

{{--                    <!-- Apply Coupon Wrapper Start -->--}}
{{--                    <div class="apply-coupon-wrapper">--}}
{{--                        <form action="#" method="post" class=" d-block d-md-flex">--}}
{{--                            <input type="text" placeholder="Enter Your Coupon Code" required />--}}
{{--                            <button class="btn btn-dark btn-hover-primary rounded-0">Apply Coupon</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <!-- Apply Coupon Wrapper End -->--}}

                    <!-- Cart Update Start -->
{{--                    <div class="cart-update mt-sm-16">--}}
{{--                        <a href="#" class="btn btn-dark btn-hover-primary rounded-0">Cập nhật</a>--}}
{{--                    </div>--}}
                    <!-- Cart Update End -->

                </div>
                <!-- Cart Update Option End -->

            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 ms-auto col-custom">

                <!-- Cart Calculation Area Start -->
                <div class="cart-calculator-wrapper">

                    <!-- Cart Calculate Items Start -->
                    <div class="cart-calculate-items">

                        <!-- Cart Calculate Items Title Start -->
                        <h3 class="title">Tạm tính</h3>
                        <!-- Cart Calculate Items Title End -->

                        <!-- Responsive Table Start -->
                        <div class="table-responsive">
                            <table class="table">
                                <?php
                                $sum = 0;
                                for ($i = 0; $i < count($product); $i++){
                                    $total = $product[$i]->price * $product[$i]->amount_product;
                                    $sum += $total;
                                }
                                ?>
                                <tr>
                                    <td>Tiền hàng</td>
                                    <td>{{number_format($sum, 0, ',', '.')}} VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>Miễn phí</td>
                                </tr>
                                <tr class="total">
                                    <td>Tổng</td>
                                    <td class="total-amount">{{number_format($sum, 0, ',', '.')}} VNĐ</td>
                                </tr>
                            </table>
                        </div>
                        <!-- Responsive Table End -->

                    </div>
                    <!-- Cart Calculate Items End -->

                    <!-- Cart Checktout Button Start -->
                    <a href="{{route('checkout')}}" class="btn btn-dark btn-hover-primary rounded-0 w-100">Thanh toán</a>
                    <!-- Cart Checktout Button End -->

                </div>
                <!-- Cart Calculation Area End -->

            </div>
        </div>

    </div>
</div>
<!-- Shopping Cart Section End -->
@endsection
