<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('arquivos/logos/7.png') }}">
    <title>DECOLA SCHOOL</title>
    <link href="{{ asset('css/nav/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/anime.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/missao/missao.css') }}" rel="stylesheet">
     <link href="{{ asset('css/about/about.css') }}" rel="stylesheet">
      <link href="{{ asset('css/zap/zap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tipografia.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grid-system.css') }}" rel="stylesheet">
    <link href="{{ asset('css/imagens.css') }}" rel="stylesheet">
    <link href="{{ asset('css/banner/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


    <!-- CDN do FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link para fontes personalizadas do Google Fonts, permitindo o uso de fontes com diferentes pesos -->
    <link href="https://fonts.googleapis.com/css2?family=NomeDaFonte:wght@400;700&display=swap" rel="stylesheet">

    <!-- Link para o arquivo CSS do FontAwesome, que fornece ícones prontos para serem usados no projeto -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Link para o arquivo CSS dos ícones do Bootstrap, que oferece mais opções de ícones prontos para usar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    <header id="wm-header" class="wm-header-one">
        @include('components.header.header')
    </header>

    <nav>
        @include('components.nav.nav')
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('components.footer.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="{{ asset('js/chart.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash) {
                const targetSection = document.querySelector(window.location.hash);
                setTimeout(() => {
                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: "smooth"
                        });
                    }
                }, 500);
            }

            document.querySelectorAll('a[href^="{{ route('home') }}#"]').forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetHash = this.getAttribute("href").split("#")[1];
                    window.location.href = "{{ route('home') }}#" + targetHash;
                });
            });
        });

        const target = document.querySelectorAll('[data-anime]');
        const animationClass = 'animate';

        function animeScroll() {
            const windowTop = window.pageYOffset + (window.innerHeight * 3) / 4;

            target.forEach((e) => {
                if (windowTop > e.offsetTop) {
                    e.classList.add(animationClass);
                } else {
                    e.classList.remove(animationClass);
                }
            });
        }

        window.addEventListener('scroll', function() {
            animeScroll();
        });


    </script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Ativar dropdowns manualmente para Bootstrap 5
        var dropdownElements = document.querySelectorAll('.dropdown-toggle');
        dropdownElements.forEach(function (dropdown) {
            new bootstrap.Dropdown(dropdown);
        });

        // Suavizar rolagem para âncoras com hash
        if (window.location.hash) {
            const target = document.querySelector(window.location.hash);
            if (target) {
                setTimeout(() => {
                    target.scrollIntoView({ behavior: "smooth" });
                }, 200);
            }
        }
    });
</script>
</body>

</html>
