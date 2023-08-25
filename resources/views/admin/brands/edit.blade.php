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
                                <form action="{{route('brand.edit',[$value[0]->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mx-sm-30 mx-20 ">

                                        <div class="card add-product p-sm-30 p-20 mb-30">
                                            <div class="card-body p-0">
                                                <div class="card-header">
                                                    <h6 class="fw-500">{{$title}}</h6>
                                                </div>

                                                <div class="add-product__body px-sm-40 px-20">

                                                    <div class="form-group">
                                                        <label for="name1">brands name</label>
                                                        <input type="text" class="form-control" name="name"
                                                               placeholder="Nhập dữ liệu" value="{{$value[0]->name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">brands image</label>
                                                        <img src="{{url('storage/'.$value[0]->image)}}" style="max-width: 300px">
                                                    </div>
                                                    <div class="dm-tag-wrap">
                                                        <label for="name2">Brands Image</label>
                                                        <div class="dm-upload">
                                                            <div class="dm-upload__button">
                                                                <a href="javascript:void(0)"
                                                                   class="btn btn-lg btn-outline-lighten btn-upload"
                                                                   onclick="$('#upload-1').click()"> <img class="svg"
                                                                                                          src="{{url('admin/img/svg/upload.svg')}}" alt="upload"> Click to Upload</a>
                                                                <input type="file" name="upload" class="upload-one" id="upload-1">
                                                            </div>
                                                            <div class="dm-upload__file">
                                                                <ul>
                                                                </ul>
                                                            </div>
                                                        </div>
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


