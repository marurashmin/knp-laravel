<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('/assets/img/favicon.png') }}">
    <title>
        @yield('title') | KNP Laravel
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ URL::asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{URL::asset('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('/css/datepicker.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="{{URL::asset('/assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
        <style>
            .ck-editor__editable {
                min-height: 300px;
            }
        </style>


</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('layouts.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.header')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('content')
        </div>
        
    </main>
    
    <!--   Core JS Files   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ URL::asset('/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/datatables.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ URL::asset('/assets/js/sweetalert.js') }}"></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js'></script>
    <script>
        @if (session('status'))
            swal({
                title: '{{ session('status')}}',
                icon: '{{ session('statuscode')}}',
                button: "OK",
            });
        @endif
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
    @yield('scripts')
</body>

</html>
