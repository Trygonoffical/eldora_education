<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eldora Education') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('cs/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Daterangepicker CSS -->
    <link href="{{ asset('vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">



        {{-- dashboard navbar --}}
        @include('inc.dashboardNavbar')
        {{-- dashboard navbar end --}}

        {{-- side bar --}}
        @include('inc.sidebar')
        {{-- end side bar --}}


        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            @yield('content')

        </div>


    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('vendors/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Init JS -->
    <script src="{{ asset('dist/js/init.js') }}"></script>


    <!-- Data Table JS -->
    <script src="{{ Asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ Asset('vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ Asset('vendors/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Daterangepicker JS -->
    <script src="{{ Asset('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ Asset('vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ Asset('dist/js/daterangepicker-data.js') }}"></script>

    <!-- Amcharts Maps JS -->
    <script src="{{ Asset('vendors/%40amcharts/amcharts4/core.js') }}"></script>
    <script src="{{ Asset('vendors/%40amcharts/amcharts4/maps.js') }}"></script>
    <script src="{{ Asset('vendors/%40amcharts/amcharts4-geodata/worldLow.js') }}"></script>
    <script src="{{ Asset('vendors/%40amcharts/amcharts4-geodata/worldHigh.js') }}"></script>
    <script src="{{ Asset('vendors/%40amcharts/amcharts4/themes/animated.js') }}"></script>

    <!-- Apex JS -->
    <script src="{{ Asset('vendors/apexcharts/dist/apexcharts.min.js') }}"></script>

    <!-- Init JS -->

    <script src="{{ asset('dist/js/init.js') }}"></script>
    <script src="{{ Asset('dist/js/chips-init.js') }}"></script>
    <script src="{{ Asset('dist/js/dashboard-data.js') }}"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ed1 '))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
