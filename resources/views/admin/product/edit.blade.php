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
                                <form action="{{route('pro.edit', [$product->id])}}" method="post">
                                    @csrf
                                    <div class="mx-sm-30 mx-20 ">

                                        <div class="card add-product p-sm-30 p-20 mb-30">
                                            <div class="card-body p-0">
                                                <div class="card-header">
                                                    <h6 class="fw-500">{{$title}}</h6>
                                                </div>

                                                <div class="add-product__body px-sm-40 px-20">

                                                    <div class="form-group">
                                                        <label for="name1">category</label>
                                                        <div class="card-body">
                                                            <div class="dm-select-list d-flex">
                                                                <div class="dm-select ">
                                                                    <select name="category" id="" class="form-control ">
                                                                        @foreach($category as $key => $value)
                                                                            <option value="{{$value->id}}" {{$value->id == $product->id_cate ? 'selected' : ''}}>{{$value->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">brand</label>
                                                        <select name="brand" id="" class="form-control ">
                                                            @foreach($brand as $key => $value)
                                                                <option value="{{$value->id}}"{{$value->id == $product->id_brands ? 'selected' : ''}} >{{$value->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">Tên sản phẩm</label>
                                                        <input type="text" class="form-control" name="name"
                                                               placeholder="Nhập dữ liệu" value="{{$product->name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">Số lượng</label>
                                                        <input type="number" class="form-control" name="amount"
                                                               placeholder="Nhập dữ liệu" value="{{$product->amount}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">Giá cũ</label>
                                                        <input type="text" class="form-control" name="old_price"
                                                               placeholder="Nhập dữ liệu" value="{{$product->old_price}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">Giá sale</label>
                                                        <input type="text" class="form-control" name="sale_price"
                                                               placeholder="Nhập dữ liệu" value="{{$product->sale_price}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name1">Mô tả</label>
                                                        <textarea name="editor1" id="editor1" rows="10" cols="80">{{$product->description}}</textarea>
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
                                </form>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
@push('javascipts')
    <script type="text/javascript">
        CKEDITOR.replace( 'editor1', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserWindowWidth: '640',
            filebrowserWindowHeight: '480'
        } );
    </script>

@endpush
