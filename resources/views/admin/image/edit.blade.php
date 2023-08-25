@extends('admin.layout.index')
@section('content')
    <div class="contents">
        @include('admin.layout.errors')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div
                        class="product-add global-shadow px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                        <div class="row justify-content-center">
                            <div class="col-xxl-7 col-lg-10">
{{--                                {{dd($image)}}--}}
                                <form action="{{route('image.edit', ['id' => $id, 'product' => $product])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card card-default card-md mb-4">
                                        <div class="card-header  py-20">
                                            <h6>{{$title}}</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="dm-tag-wrap">
                                                <div class="dm-upload">
                                                    <img src="{{$image[$id] == 'No image' ? '' : asset('storage/'.$image[$id])}}" alt="Lỗi tải ảnh" style="width: 300px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="dm-tag-wrap">
                                                <div class="dm-upload">
                                                    <div class="dm-upload-avatar">
                                                        <img class="avatrSrc" src="{{url('admin/img/upload.png')}}" alt="Avatar Upload">
                                                    </div>
                                                    <div class="avatar-up">
                                                        <input type="file" name="upload"
                                                               class="upload-avatar-input">
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
