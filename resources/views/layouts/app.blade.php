<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escola Decola</title>
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-four.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-three.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-two.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyphoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-slider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        @include('components.header.header') <!-- Inclui o arquivo header.blade.php -->
        @include('components.nav.nav') <!-- Inclui o arquivo nav.blade.php -->
    </header>

    <!-- Main content -->
    <main>
        @yield('content') <!-- O conteúdo das páginas específicas vai ser inserido aqui -->
    </main>

    <!-- Footer -->
    <footer>
        @include('components.footer.footer') <!-- Inclui o arquivo footer.blade.php -->
    </footer>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/arearestrita.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/cep.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/prettyphoto.js') }}"></script>
{{-- script --}}
<script src="{{ asset('script/fitvideo.js') }}"></script>
<script src="{{ asset('script/functions.js') }}"></script>
<script src="{{ asset('script/isotope.min.js') }}"></script>
<script src="{{ asset('script/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('script/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('script/jquery.prettyphoto.js') }}"></script>
<script src="{{ asset('script/modernizr.js') }}"></script>
<script src="{{ asset('script/skills.js') }}"></script>
<script src="{{ asset('script/slick.slider.min.js') }}"></script>
<script src="{{ asset('script/waypoints-min.js') }}"></script>
</html>
