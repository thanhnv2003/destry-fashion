@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
@endpush
@section('content')
    <!-- My Account Section Start -->
    <div class="section section-margin">
        <div class="container">
            @include('client.layout.errors')
            <div class="row">
                <div class="col-lg-12">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-bs-toggle="tab"><i
                                            class="fa fa-dashboard"></i>
                                        Bảng điều khiển</a>
                                    <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                        Đặt hàng</a>
                                    <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i>
                                        Tải xuống</a>
                                    <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>
                                        Phương thức thanh toán</a>
                                    <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                        Địa chỉ</a>
                                    <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i>Chi tiết tài khoản</a>
                                    <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Dashboard</h3>
                                            <div class="welcome">
                                                <p>Xin chào, <strong>{{$user->name}}</strong> (Nếu không phải <strong>{{$user->name}}!</strong><a
                                                        href="{{route('logout')}}" class="logout"> Đăng xuất tại đây</a>)</p>
                                            </div>
                                            <p class="mb-0">
                                                Từ bảng điều khiển tài khoản của bạn. Bạn có thể dễ dàng kiểm tra và xem
                                                đơn đặt hàng gần đây của bạn, quản lý địa chỉ giao hàng và thanh toán của bạn và chỉnh sửa
                                                mật khẩu và chi tiết tài khoản của bạn.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Đặt hàng</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Đặt hàng</th>
                                                        <th>
                                                            Ngày</th>
                                                        <th>Trạng thái</th>
                                                        <th>Tổng </th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($bill as $key => $value)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$value->updated_at}}</td>
                                                        <td>{{$value->status}}</td>
                                                        <td>{{number_format($value->into_money, 0, ',', '.')}} VNĐ</td>
                                                        <td><a href="{{route('cli_cart', [$value->id])}}"
                                                               class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">Chi tiết</a>
                                                            @if($value->status == 'Đơn hàng mới')
                                                            <a href="{{route('cancel-order', [$value->id])}}"
                                                               class="btn btn btn-dark btn-hover-primary btn-sm rounded-0"
                                                               onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng?')">Hủy</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">
                                                Tải xuống</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>
                                                            Sản phẩm</th>
                                                        <th>Ngày</th>
                                                        <th>Hết hạn</th>
                                                        <th>Tải xuống</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Haven - Free Real Estate PSD Template</td>
                                                        <td>Aug 22, 2023</td>
                                                        <td>Yes</td>
                                                        <td><a href="#"
                                                               class="btn btn btn-dark btn-hover-primary rounded-0"><i
                                                                    class="fa fa-cloud-download me-1"></i> Download
                                                                File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HasTech - Profolio Business Template</td>
                                                        <td>Sep 12, 2023</td>
                                                        <td>Never</td>
                                                        <td><a href="#"
                                                               class="btn btn btn-dark btn-hover-primary rounded-0"><i
                                                                    class="fa fa-cloud-download me-1"></i> Download
                                                                File</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Phương thức thanh toán</h3>
                                            <p class="saved-message">Bạn chưa thể lưu phương thức thanh toán của mình.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Địa chỉ thanh toán</h3>
                                            <form action="{{route('update_address')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                                <div class="single-input-item mb-3">
                                                    <label for="display-name" class="required mb-1">Số điện thoại</label>
                                                    <input name="phone" type="text" id="display-name"
                                                           placeholder="Phone number" value="{{$user->phone}}" />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Địa chỉ nhà</label>
                                                    <input name="address" type="text" id="email"
                                                           placeholder="Home Address" value="{{$user->address}}" />
                                                </div>
                                                <div class="single-input-item single-item-button">
                                                    <input type="submit" name="btnAddress" value="Lưu thay đổi"
                                                           class="btn btn btn-dark btn-hover-primary rounded-0">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Chi tiết tài khoản</h3>
                                            <div class="account-details-form">
                                                <form action="{{route('my_account')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                                    <div class="single-input-item mb-3">
                                                        <label for="display-name" class="required mb-1">Tên hiển thị</label>
                                                        <input name="name" type="text" id="display-name"
                                                               placeholder="Display name" value="{{$user->name}}" />
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1">Địa chỉ email</label>
                                                        <input name="email" type="email" id="email"
                                                               placeholder="Email Address" value="{{$user->email}}" />
                                                    </div>
                                                    <fieldset>
                                                        <legend>Password change</legend>
                                                        <div class="single-input-item mb-3">
                                                            <label for="current-pwd" class="required mb-1">Mật khẩu cũ</label>
                                                            <input name="old_password" type="password" id="current-pwd"
                                                                   placeholder="Current Password" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="new-pwd" class="required mb-1">Mật khẩu mới</label>
                                                                    <input name="new_password" type="password" id="new-pwd"
                                                                           placeholder="New Password" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="confirm-pwd"
                                                                           class="required mb-1">Nhập lại mật khẩu</label>
                                                                    <input name="new_password_confirmation" type="password" id="confirm-pwd"
                                                                           placeholder="Confirm Password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item single-item-button">
                                                        <input type="submit" name="btnSm" value="Lưu thay đổi"
                                                            class="btn btn btn-dark btn-hover-primary rounded-0">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Page End -->

                </div>
            </div>

        </div>
    </div>
    <!-- My Account Section End -->
@endsection
