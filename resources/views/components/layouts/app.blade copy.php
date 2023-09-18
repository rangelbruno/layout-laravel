<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SISTEMA - {{ $title ?? '' }}</title>
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon" type="image/x-icon" />
    <!-- ============================================================== -->
    <!-- Start STYLES GLOBAL here -->
    <!-- ============================================================== -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- ============================================================== -->
    <!-- Start OTHER STYLES here -->
    <!-- ============================================================== -->
    {{ $style }}
</head>

<body class="sidebar-noneoverflow starterkit">

    <!-- ============================================================== -->
    <!-- Start HEADER here -->
    <!-- ============================================================== -->
    <x-layouts.header />
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start SIDEBAR here -->
        <!-- ============================================================== -->
        <x-layouts.sidebar />

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <!-- CONTENT AREA -->

                <!-- ============================================================== -->
                <!-- Start CONTENT here -->
                <!-- ============================================================== -->
                {{ $slot }}


                <!-- CONTENT AREA -->

            </div>
            <!-- ============================================================== -->
            <!-- Start FOOTER here -->
            <!-- ============================================================== -->
            <x-layouts.footer />
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- ============================================================== -->
    <!-- Start SCRIPTS GLOBAL here -->
    <!-- ============================================================== -->
    <script src="{{ url('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}">
    </script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    <script>
    $(document).ready(function() {
        App.init();
    });
    </script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Start OTHER SCRIPTS here -->
    <!-- ============================================================== -->
    {{ $script }}
</body>

</html>