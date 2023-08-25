@extends('admin.layout.index')
@section('content')
    <div class="contents">
        @include('admin.layout.errors')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">{{$title}}</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="uil uil-estate"></i>eCommerce</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div
                        class="product-add global-shadow px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                        <div class="row justify-content-center">
                            <div class="col-xxl-7 col-lg-10">
                                <form action="{{route('user.edit', [$value[0]->id])}}" method="post">
                                    @csrf
                                    <div class="mx-sm-30 mx-20 ">

                                        <div class="card add-product p-sm-30 p-20 mb-30">
                                            <div class="card-body p-0">
                                                <div class="card-header">
                                                    <h6 class="fw-500">{{$title}}</h6>
                                                </div>

                                                <div class="add-product__body px-sm-40 px-20">

                                                    <div class="form-group">
                                                        <label for="name1">name</label>
                                                        <input type="text" class="form-control" name="name"
                                                               placeholder="Nhập dữ liệu" value="{{$value[0]->name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">email</label>
                                                        <input type="email" class="form-control" name="email"
                                                               placeholder="Nhập dữ liệu" value="{{$value[0]->email}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">password</label>
                                                        <input type="text" class="form-control" name="password"
                                                               placeholder="Nhập dữ liệu">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">phone number</label>
                                                        <input type="text" class="form-control" name="phone"
                                                               placeholder="Nhập dữ liệu" value="{{$value[0]->phone}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">address</label>
                                                        <input type="text" class="form-control" name="address"
                                                               placeholder="Nhập dữ liệu" value="{{$value[0]->address}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">Role</label>
                                                        <input type="text" class="form-control" name="role"
                                                               value="{{$value[0]->role}}" placeholder="Nhập dữ liệu">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>



                                        <div
                                            class="button-group add-product-btn d-flex justify-content-sm-end justify-content-center mt-40">
                                            <button type="reset"
                                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                            </button>
                                            <input type="submit" class="btn btn-primary btn-default btn-squared text-capitalize" value="save">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

