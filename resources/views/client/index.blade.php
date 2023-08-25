<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/destry/destry/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 12:38:50 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destry - Fashion eCommerce</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('client.layout.css')

    <!-- Main Style CSS -->

    @stack('css')

</head>

<body>
@include('client.layout.header')


@yield('content')


<!-- Footer Section Start -->
@include('client.layout.footer')
<!-- Footer Section End -->

<!-- Scroll Top Start -->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fa fa-long-arrow-up"></i>
    <i class="arrow-bottom fa fa-long-arrow-up"></i>
</a>
<!-- Scroll Top End -->

<!-- Scripts -->
<!-- Scripts -->
<!-- Global Vendor, plugins JS -->

@include('client.layout.js')

<!--Main JS-->
@stack('scripts')


</body>


<!-- Mirrored from htmldemo.net/destry/destry/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 12:38:50 GMT -->
</html>
