<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">

<link rel="shortcut icon" href="{{ url('img/sc_icon.png') }}" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title','Comics Characters - Search')</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
<!-- Datatable -->
<link rel="stylesheet" href="{{ url('css/jquery.dataTables.css') }}">

<!--CSS -->
<link rel="stylesheet" href="{{ url('css/main_styles.css') }}">
@stack('styles')
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
    <body>
        <div class="main_container container-fluid p-0">
        
            @yield('content')
            
        </div>

        <footer>
            <div>
                <span>Project designed and developed by <span class="developer">Ennio Sáenz</span>
                </span>
            </div>
        </footer>

        <!--Java Script-->
        <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
        <script src="{{ url('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.js') }}"></script>
        <script src="{{ url('js/jquery.dataTables.js') }}"></script>
        <script src="{{ url('js/main_script.js') }}"></script>

        
    </body>
</html>

