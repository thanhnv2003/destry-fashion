@extends('admin.layout.index')
@section('content')
    <div class="contents">
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
                <div class="col-lg-12 mb-30">
                    <div class="card">
                        <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                <div
                                    class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                                    <h4 class="text-capitalize fw-500 breadcrumb-title">Data Table</h4>
                                </div>
                            </div>
                            <div class="action-btn">
                                <a href="{{route('brand.add')}}" class="btn btn-primary">
                                    Thêm mới
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="userDatatable global-shadow border-light-0 w-100">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <div class="d-flex align-items-center">
                                                    <div class="custom-checkbox  check-all">
                                                        <input class="checkbox" type="checkbox" id="check-45">
                                                        <label for="check-45">
                                                                    <span
                                                                        class="checkbox-text userDatatable-title">image</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">name</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">created_at</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">updated_at</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-end">action</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div
                                                        class="userDatatable__imgWrapper d-flex align-items-center">
                                                        <div class="checkbox-group-wrapper">
                                                            <div class="checkbox-group d-flex">
                                                                <div
                                                                    class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox"
                                                                           id="check-grp-12">
                                                                    <label for="check-grp-12"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{{route('brand.edit', [$value->id])}}"
                                                           class="profile-image rounded-circle d-block m-0 wh-38"
                                                           style="background-image:url({{url('storage',$value->image)}}); background-size: cover;"></a>
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$value->name}}
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
                                                    {{--                                                <li>--}}
                                                    {{--                                                    <a href="#" class="view">--}}
                                                    {{--                                                        <i class="uil uil-setting"></i>--}}
                                                    {{--                                                    </a>--}}
                                                    {{--                                                </li>--}}
                                                    <li>
                                                        <a class="btn btn-secondary mx-1" href="{{route('brand.edit', [$value->id])}}" >Sửa</a>
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
                    window.location.href = `{{url('wp-admin/brands/delete')}}`+`/`+ id;
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
