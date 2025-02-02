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
        @include('components.header.header')  <!-- Inclui o arquivo nav.blade.php -->
        @include('components.nav.nav')  <!-- Inclui o arquivo nav.blade.php -->
    </header>

    <!-- Main content -->
    <main>
        @include('components.banner.banner')  <!-- Inclui o arquivo nav.blade.php -->
    </main>

    <!-- Footer -->
    <footer>
        @include('components.footer.footer')  <!-- Inclui o arquivo footer.blade.php -->
    </footer>
</body> 
</html>
