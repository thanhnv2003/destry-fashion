@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
@endpush
@section('content')
    @extends('client.index')
    @push('css')
        <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
    @endpush
    @push('scripts')
        <script src="{{url('client/assets/js/main.js')}}"></script>
    @endpush
    @section('content')
        <!-- Breadcrumb Section Start -->
        <div class="section">


            <!-- Breadcrumb Area Start -->
            <div class="breadcrumb-area bg-light">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h1 class="title">Đặt lại mật khẩu</h1>
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home </a>
                            </li>
                            <li class="active">Reset Password</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Area End -->

        </div>
        <!-- Breadcrumb Section End -->

        <!-- Login | Register Section Start -->
        <div class="section section-margin">

            <div class="container">
                @include('client.layout.errors')
                <div class="row mb-n10">
                    <div class="col-lg-12 col-md-8 m-auto m-lg-0 pb-10">
                        <!-- Login Wrapper Start -->
                        <div class="login-wrapper">

                            <!-- Login Title & Content Start -->
                            <div class="section-content text-center mb-5">
                                <h2 class="title mb-2">Đặt lại mật khẩu</h2>
                                <p class="desc-content">Please reset using password detail bellow.</p>
                            </div>
                            <!-- Login Title & Content End -->

                            <!-- Form Action Start -->
                            <form action="{{route('reset-pass',[$token])}}" method="post">
                                @csrf
                                <input type="hidden" name="token" value="{{$token}}">
                                <!-- Input Email Start -->
                                <div class="single-input-item mb-3">
                                    <input name="password" type="text" placeholder="Enter your Password">
                                </div>
                                <!-- Input Email End -->
                                <!-- Input Email Start -->
                                <div class="single-input-item mb-3">
                                    <input name="password_confirmation" type="text" placeholder="Enter your Password Confirmation">
                                </div>
                                <!-- Input Email End -->

                                <!-- Login Button Start -->
                                <div class="single-input-item mb-3">
                                    <input name="btnReset" type="submit" class="btn btn btn-dark btn-hover-primary rounded-0" value="Yêu cầu">
                                </div>
                                <!-- Login Button End -->

                                <!-- Lost Password & Creat New Account Start -->
                                <div class="lost-password">
                                    <a href="{{route('login')}}">Login Account</a>
                                </div>
                                <!-- Lost Password & Creat New Account End -->

                            </form>
                            <!-- Form Action End -->

                        </div>
                        <!-- Login Wrapper End -->
                    </div>
                </div>

            </div>
        </div>
        <!-- Login | Register Section End -->
    @endsection

@endsection
