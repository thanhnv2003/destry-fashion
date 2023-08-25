@extends('admin.layout.index')
@section('content')
    <div class="contents">
        @include('admin.layout.errors')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Data Table</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i
                                                class="uil uil-estate"></i>Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-30">
                    <div class="support-ticket-system support-ticket-system--search">
                        <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                <div
                                    class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                                    <h4 class="text-capitalize fw-500 breadcrumb-title">Data Table</h4>
                                </div>
                            </div>
                            <div class="action-btn">
                                <a href="{{route('pro.add')}}" class="btn btn-primary">
                                    Thêm mới
                                </a>
                            </div>
                        </div>
                        <div
                            class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
                            <div class="support-form__input">
                                <div class="d-flex flex-wrap">
                                    <div class="support-form__input-id">
                                        <label>Id:</label>
                                        <div class="dm-select ">
                                            <select name="select-search" class="select-search form-control ">
                                                <option value="01">All</option>
                                                <option value="02">Option 2</option>
                                                <option value="03">Option 3</option>
                                                <option value="04">Option 4</option>
                                                <option value="05">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="support-form__input-status">
                                        <label>status:</label>
                                        <div class="dm-select ">
                                            <select name="select-search" class="select-search form-control ">
                                                <option value="01">All</option>
                                                <option value="02">Option 2</option>
                                                <option value="03">Option 3</option>
                                                <option value="04">Option 4</option>
                                                <option value="05">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="support-form__input-button">search</button>
                                </div>
                            </div>
                            <div class="support-form__search">
                                <div class="support-order-search">
                                    <form action="https://demo.dashboardmarket.com/"
                                          class="support-order-search__form">
                                        <img src="{{asset('admin/img/svg/search.svg')}}" alt="search" class="svg">
                                        <input class="form-control border-0 box-shadow-none" type="search"
                                               placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <span class="userDatatable-title">STT</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Cate</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Brand</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Tên</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Số lượng</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Giá cũ</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Giá ưu đãi</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Trạng thái</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Created_at</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Updated_at</span>
                                        </th>
                                        <th class="actions">
                                            <span class="userDatatable-title">Actions</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $value)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            @foreach($category as $cate)
                                                                @if($cate->id == $value->id_cate)
                                                                    <h6>{{$cate->name}}</h6>
                                                                @endif
                                                            @endforeach
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            @foreach($brand as $brands)
                                                                @if($brands->id == $value->id_brands)
                                                                    <h6>{{$brands->name}}</h6>
                                                                @endif
                                                            @endforeach
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>{{$value->name}}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>{{$value->amount}}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>{{$value->old_price}}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>{{$value->sale_price}}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>{{$value->status}}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>{{date('d-m-Y H:i:s', strtotime($value->created_at))}}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>{{date('d-m-Y H:i:s', strtotime($value->updated_at))}}</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                                                    <li>
                                                                                                        <a href="{{route('image.list', ['id' => $value->id])}}" class="view">
                                                                                                            Ảnh
                                                                                                        </a>
                                                                                                    </li>
                                                    <li>
                                                        <a class="btn btn-secondary mx-1" href="{{route('pro.edit', [$value->id])}}" >Sửa</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-danger btn-squared" onclick="deletItem({{$value->id}})">Xóa</a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end pt-30">
                                <nav class="dm-page ">
                                    <ul class="dm-pagination d-flex">
                                        <li class="dm-pagination__item">

                                            {{--                                            <a href="#" class="dm-pagination__link pagination-control"><span--}}
                                            {{--                                                    class="la la-angle-left"></span></a>--}}
                                            @foreach($data->links()->elements[0] as $key => $value)
                                                <a href="{{$value}}" class="dm-pagination__link"><span
                                                        class="page-number"></span>{{$key}}</a>
                                            @endforeach

                                            {{--                                            <a href="#" class="dm-pagination__link active"><span--}}
                                            {{--                                                    class="page-number">2</span></a>--}}
                                            {{--                                            <a href="#" class="dm-pagination__link"><span--}}
                                            {{--                                                    class="page-number">3</span></a>--}}
                                            {{--                                            <a href="#" class="dm-pagination__link pagination-control"><span--}}
                                            {{--                                                    class="page-number">...</span></a>--}}
                                            {{--                                            <a href="#" class="dm-pagination__link"><span--}}
                                            {{--                                                    class="page-number">12</span></a>--}}
                                            {{--                                            <a href="#" class="dm-pagination__link pagination-control"><span--}}
                                            {{--                                                    class="la la-angle-right"></span></a>--}}
                                            {{--                                            <a href="#" class="dm-pagination__option">--}}
                                            {{--                                            </a>--}}
                                        </li>
                                        {{--                                        <li class="dm-pagination__item">--}}
                                        {{--                                            <div class="paging-option">--}}
                                        {{--                                                <select name="page-number" class="page-selection">--}}
                                        {{--                                                    <option value="20">20/page</option>--}}
                                        {{--                                                    <option value="40">40/page</option>--}}
                                        {{--                                                    <option value="60">60/page</option>--}}
                                        {{--                                                </select>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </li>--}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascipts')
    <script>
        function deletItem(id){
            Swal.fire({
                title: 'Bạn chắc chắn?',
                text: "Bạn có chắc chắn muốn xóa không ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `{{url('wp-admin/products/delete')}}`+`/`+ id;
                }
            })
        }
    </script>
    @if(Session::has('success'))
        <script>
            Swal.fire(
                'Thông báo!',
                '{{Session::get('success')}}',
                'success'
            )
        </script>
    @endif
@endpush
