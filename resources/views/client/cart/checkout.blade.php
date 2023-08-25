@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush
@section('content')
    <!-- Checkout Section Start -->
    <div class="section section-margin">
        <div class="container">
            @include('client.layout.errors')
            <div class="row">
                <div class="col-12">
                    <!-- Coupon Accordion Start -->
                    <div class="coupon-accordion">

                        @if (! Session::has('coupon') )
                        <!-- Title Start -->
                        <h3 class="title">
                            Có phiếu giảm giá? <span id="showcoupon">Nhấn vào đây để nhập mã của bạn</span></h3>
                        <!-- Title End -->
                        @endif

                        <!-- Checkout Coupon Start -->
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="{{route('coupon')}}" method="post">
                                    @csrf
                                    <p class="checkout-coupon d-flex">
                                        <input name="code" placeholder="Coupon code" type="text">
                                        <input name="btnSm" class="btn btn-dark btn-hover-primary rounded-0" value="Apply Coupon"
                                               type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- Checkout Coupon End -->

                    </div>
                    <!-- Coupon Accordion End -->
                </div>
            </div>
            <form action="{{route('checkout')}}" method="post">
                @csrf
                <div class="row mb-n4">
                    <div class="col-lg-6 col-12 mb-4">

                        <!-- Checkbox Form Start -->

                            <div class="checkbox-form">

                                <!-- Checkbox Form Title Start -->
                                <h3 class="title">Chi tiết thanh toán</h3>
                                <!-- Checkbox Form Title End -->

                                <div class="row">

                                    <!-- Company Name Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Họ và tên <span class="required">*</span></label>
                                            <input name="name" value="{{$user->name}}" placeholder="Enter your name" type="text">
                                        </div>
                                    </div>
                                    <!-- Company Name Input End -->

                                    <!-- Address Input Start -->
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ <span class="required">*</span></label>
                                            <input name="address" value="{{$user->address}}" placeholder="Street address" type="text">
                                        </div>
                                    </div>
                                    <!-- Address Input End -->

                                    <!-- Email Address Input Start -->
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input name="email" value="{{$user->email}}" placeholder="" type="email">
                                        </div>
                                    </div>
                                    <!-- Email Address Input End -->

                                    <!-- Phone Number Input Start -->
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Số điện thoại <span class="required">*</span></label>
                                            <input name="phone" value="{{$user->phone}}" type="text">
                                        </div>
                                    </div>
                                    <!-- Phone Number Input End -->

                                </div>

                            </div>

                        <!-- Checkbox Form End -->

                    </div>

                    <div class="col-lg-6 col-12 mb-4">

                        <!-- Your Order Area Start -->
                        <div class="your-order-area border">

                            <!-- Title Start -->
                            <h3 class="title">Đơn đặt hàng của bạn</h3>
                            <!-- Title End -->

                            <!-- Your Order Table Start -->
                            <div class="your-order-table table-responsive">
                                <table class="table">

                                    <!-- Table Head Start -->
                                    <thead>
                                    <tr class="cart-product-head">
                                        <th class="cart-product-name text-start">Sản phẩm</th>
                                        <th class="cart-product-total text-end">Tổng cộng</th>
                                    </tr>
                                    </thead>
                                    <!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>
                                    @foreach($product as $value)
                                    <tr class="cart_item">
                                            <?php
                                            $detail = \Illuminate\Support\Facades\DB::table('products')->where('id', $value->id_product)->first();
                                            ?>
                                        <td class="cart-product-name text-start ps-0">{{$detail->name}}<strong
                                                class="product-quantity"> × {{$value->amount_product}}</strong></td>
                                        <td class="cart-product-total text-end pe-0"><span class="amount">{{number_format($value->price * $value->amount_product, 0, ',', '.')}} VNĐ</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <!-- Table Body End -->

                                    <!-- Table Footer Start -->
                                    <tfoot>

                                    <?php
                                    $sum = 0;
                                    for ($i = 0; $i < count($product); $i++){
                                        $total = $product[$i]->price * $product[$i]->amount_product;
                                        $sum += $total;

                                    }
                                    ?>
                                    <tr class="cart-subtotal">
                                        <th class="text-start ps-0">Tạm tính</th>
                                        <input type="hidden" name="total" value="{{$sum}}">
                                        <td class="text-end pe-0"><span class="amount">{{number_format($sum, 0, ',', '.')}} VNĐ</span></td>
                                    </tr>

                                    @if (Session::has('coupon'))
                                    <tr class="cart-subtotal">
                                        <th class="text-start ps-0">Coupon</th>
                                        <td class="text-end pe-0"><span class="amount">{{number_format(\Illuminate\Support\Facades\Session::get('coupon')->price, 0, ',', '.')}} VNĐ</span></td>
                                    </tr>
                                    @endif

                                    <tr class="order-total">
                                        <?php
                                        if (\Illuminate\Support\Facades\Session::get('coupon')){
                                            $coupon = \Illuminate\Support\Facades\Session::get('coupon')->price;
                                            $sum -= $coupon;
                                        }
                                        ?>
                                        <th class="text-start ps-0">Tổng đơn đặt hàng</th>
                                        <input type="hidden" name="into_money" value="{{$sum}}">
                                        <td class="text-end pe-0"><strong><span class="amount">{{number_format($sum, 0, ',', '.')}} VNĐ</span></strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                    <!-- Table Footer End -->

                                </table>
                            </div>
                            <!-- Your Order Table End -->

                            <!-- Payment Accordion Order Button Start -->
                            <div class="payment-accordion-order-button">
                                <div class="payment-accordion">

                                    <div class="single-payment">
                                        <h5 class="panel-title mb-3">
                                            <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-2"
                                               aria-expanded="false" aria-controls="collapseExample-2">
                                                Thanh toán khi nhận hàng
                                            </a>
                                        </h5>
                                        <div class="collapse" id="collapseExample-2">
                                            <div class="card card-body rounded-0">
                                                <p>Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Đơn đặt hàng của bạn
                                                    ID làm tài liệu tham khảo thanh toán. Đơn đặt hàng của bạn sẽ không được vận chuyển cho đến khi tiền
                                                    đã xóa trong tài khoản của chúng tôi.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="order-button-payment">
                                    <input type="submit" name="btnSm" class="btn btn-dark btn-hover-primary rounded-0 w-100" value="Đặt hàng">
                                </div>
                            </div>
                            <!-- Payment Accordion Order Button End -->
                        </div>
                        <!-- Your Order Area End -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Section End -->
@endsection
