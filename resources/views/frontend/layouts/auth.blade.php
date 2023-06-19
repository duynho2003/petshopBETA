<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer store</title>
    <link rel="stylesheet" href="{{ asset('assetFE/TestAuth/assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetFE/TestAuth/assets/css/style.css') }}">
    <style>
        .back_store_wrapper {
            font-size: 18px; font-weight: 400; display: flex; margin-left: 5%;
        }
        .back_store_link {
            text-decoration: none;
        }
        .back_store_icon {
            font-size:  25px; padding: 5px;
        }
    </style>
    @yield('css')
</head>
<body>
    @yield('content')
    <script src="{{ asset('assetFE/TestAuth/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assetFE/TestAuth/assets/js/main.js') }}"></script>
    @yield('js')
</body>
</html>