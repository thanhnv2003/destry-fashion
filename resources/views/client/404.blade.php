@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
@endpush
@section('content')
    <!-- 404 Error Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1 class="title">404</h1>
                        <h2 class="sub-title">Opps! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been<br> removed, name changed or
                            is temporarily unavailable.</p>
                        <form class="search-form-error mb-8" action="#">
                            <input class="input-text" placeholder="Search..." type="text">
                            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <a href="index.html" class="btn btn-primary btn-hover-dark rounded-0">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Error Section End -->
@endsection
