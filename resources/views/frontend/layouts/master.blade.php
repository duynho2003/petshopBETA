<!DOCTYPE html>
<html lang="en">
<head>
    <title>Computer Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetFE/assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">

    @yield('css')
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        @include('frontend.layouts.header')

        @yield('content')
        
        @include('frontend.layouts.benefit')

        @include('frontend.layouts.newsletter')
        
        
        <!-- Footer -->
        @include('frontend.layouts.footer')

        

    </div>

    <script src="{{ asset('assetFE/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assetFE/assets/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assetFE/assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetFE/assets/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetFE/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assetFE/assets/plugins/easing/easing.js') }}"></script>
    @yield('js')
</body>

</html>
