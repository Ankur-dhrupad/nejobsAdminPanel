{{--
<!DOCTYPE html>
<html lang="{{ auth()->check() ? auth()->user()->language : config('app.locale') }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/png" href="/favicon.png">
    <link id="theme-color" rel="stylesheet" href="/themes/{{ config('enraiged.theme.color') }}/theme.css">
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="antialiased">
    @inertia
</body>

</html>
--}}










<!DOCTYPE html>
<html lang="{{ auth()->check() ? auth()->user()->language : config('app.locale') }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/png" href="/favicon.png">
    <link id="theme-color" rel="stylesheet" href="/themes/{{ config('enraiged.theme.color') }}/theme.css">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="all">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/gordita/stylesheet.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/bootstrap-icons-1.10.2/font.css') }}" media="all">

    {{-- Inertia --}}
    <script
        src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign"
        defer></script>

    {{-- Ping CRM --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>
    <script src="{{ asset('vendor/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    {{-- {{ asset('vendor/validator.js') }} --}}

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}
    "></script>
    <!-- WOW js -->
    <script src="{{ asset('vendor/wow/wow.min.js') }}
    "></script>
    <!-- Slick Slider -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}
    "></script>
    <!-- Fancybox -->
    <script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}
    "></script>
    <!-- Lazy -->
    <script src="{{ asset('vendor/jquery.lazy.min.js') }}
    "></script>
    <!-- js Counter -->
    <script src="{{ asset('vendor/jquery.counterup.min.js') }}
    "></script>
    <script src="{{ asset('vendor/jquery.waypoints.min.js') }}
    "></script>
    <!-- Nice Select -->
    <script src="{{ asset('vendor/nice-select/jquery.nice-select.min.js') }}
    "></script>
    <!-- validator js -->
    <script src="{{ asset('vendor/validator.js') }}
    "></script>

    <!-- Theme js -->
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    @vite('resources/js/app.js')

    @inertiaHead
</head>

<body class="font-sans leading-none text-gray-700 antialiased">
    @inertia
    <!-- Initialize Select2 -->
    {{-- <script>
        $(document).ready(function() {
            // Replace '.js-example-basic-multiple' with your actual Select2 element class or ID
            $('.js-example-basic-multiple').select2();
        });
    </script> --}}
</body>

</html>