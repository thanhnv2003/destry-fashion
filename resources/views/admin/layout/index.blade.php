<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:47:07 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HexaDash</title>
    @include('admin.layout.css')

</head>

<body class="layout-light side-menu">
<div class="mobile-search">
    <form action="https://demo.dashboardmarket.com/" class="search-form">
        <img src="{{asset('admin/img/svg/search.svg')}}" alt="search" class="svg">
        <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
               aria-label="Search">
    </form>
</div>
<div class="mobile-author-actions"></div>
@include('admin.layout.header')
<main class="main-content">
    @include('admin.layout.aside')

    @yield('content')
    @include('admin.layout.footer')
</main>
{{--<div id="overlayer">--}}
{{--    <div class="loader-overlay">--}}
{{--        <div class="dm-spin-dots spin-lg">--}}
{{--            <span class="spin-dot badge-dot dot-primary"></span>--}}
{{--            <span class="spin-dot badge-dot dot-primary"></span>--}}
{{--            <span class="spin-dot badge-dot dot-primary"></span>--}}
{{--            <span class="spin-dot badge-dot dot-primary"></span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="overlay-dark-sidebar"></div>--}}
{{--<div class="customizer-overlay"></div>--}}

@include('admin.layout.js')
@stack('javascipts')
</body>

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2023 10:48:03 GMT -->

</html>
