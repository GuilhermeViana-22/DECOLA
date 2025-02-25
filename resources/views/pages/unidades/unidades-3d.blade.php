@extends('layouts.app')

@section('content')
    <!-- Seção de Banner -->
    <div class="bg-dark text-white py-5 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texto Principal -->
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Apresentação da Unidade 3D</h1>
                    <p class="lead">Assista ao vídeo arquitetônico da nossa unidade 3D e conheça os detalhes do projeto.
                    </p>
                </div>
                <!-- Ícone do Foguete Destacado -->
                <div class="col-lg-6 text-center position-relative">
                    <div class="rocket-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/744/744929.png" alt="Foguete"
                            class="img-fluid rocket-icon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de Vídeo -->
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <!-- Seção de vídeo -->
                    <div class="video-container">
                        <iframe width="700" height="500" src="https://www.youtube.com/embed/zi8AfSiqGsQ"
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
