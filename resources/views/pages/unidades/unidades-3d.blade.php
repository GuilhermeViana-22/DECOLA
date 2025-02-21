@extends('layouts.app')

@section('content')
   <!-- Seção de Banner -->
   <section class="bg-dark text-white py-5 position-relative">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto Principal -->
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold">Apresentação da Unidade 3D</h1>
                <p class="lead">Assista ao vídeo arquitetônico da nossa unidade 3D e conheça os detalhes do projeto.</p>
            </div>
            <!-- Ícone do Foguete Destacado -->
            <div class="col-lg-6 text-center position-relative">
                <div class="rocket-wrapper">
                    <img src="https://cdn-icons-png.flaticon.com/512/744/744929.png" alt="Foguete" class="img-fluid rocket-icon">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção de Vídeo -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <!-- Seção de vídeo -->
                <div class="video-container">
                    <iframe width="700" height="500" src="https://www.youtube.com/embed/zi8AfSiqGsQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    /* Estilos para centralizar o vídeo */
    .video-container {
        position: relative;
        padding-bottom: 56.25%; /* Mantém a proporção 16:9 */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
        margin: 0 auto;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .video-container iframe {
            width: 100%;
            height: 100%;
        }
    }
</style>
@endsection
