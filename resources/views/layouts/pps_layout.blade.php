<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pria Punya Selera</title>
    <meta name="api-base-url" content="{{ url('/') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <script src="{{ asset('js/main.js') }}" defer></script>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/full-width-pics.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('template/slick-1.8.1/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('template/slick-1.8.1/slick/slick-theme.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('flash::message')
        @if ($errors->any())
        <div class="alert alert-danger" id="notif">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @yield('content')
        <footer class="footer">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('template/footer.jpg') }}" height="60px" width="100%">
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/slick-1.8.1/slick/slick.min.js') }}" defer></script>
</body>

</html>
