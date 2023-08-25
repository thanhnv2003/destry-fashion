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
{{--                                            <th>--}}
{{--                                                <span class="userDatatable-title">name</span>--}}
{{--                                            </th>--}}

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
                                                            <a href="{{route('image.edit', ['id' => $key, 'product' => $id])}}"
                                                               class="profile-image rounded-circle d-block m-0 wh-38"
                                                               style="background-image:url({{url('storage',$value)}}); background-size: cover;"></a>
                                                        </div>

                                                    </div>
                                                </td>
{{--                                                <td>--}}
{{--                                                    <div class="userDatatable-content">--}}
{{--                                                        {{$value->image}}--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}

                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <li>
                                                            <a class="btn btn-secondary mx-1" href="{{route('image.edit', ['id' => $key, 'product' => $id])}}" >Sửa</a>
                                                        </li>

                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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

