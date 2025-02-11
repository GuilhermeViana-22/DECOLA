@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
    <section class="checkout-section">
        <div class="row">
            <!-- Coluna com texto à esquerda -->
            <div class="descricao-checkout col-lg-9 col-md-12">
                <h1 class="checkout-title">Checkout</h1>
                <p class="checkout-description text-white">
                    Elencadas pela UNESCO como as 12 habilidades essenciais para o futuro, este curso de Soft Skills oferece
                    as
                    ferramentas necessárias para que você se torne um verdadeiro cidadão global. Além disso, você contará
                    com
                    mentorias mensais ao vivo e síncronas, criadas especialmente para ajudá-lo a solidificar todo o
                    aprendizado e
                    aplicar os conhecimentos adquiridos nas aulas de forma prática e eficaz.
                </p>
                <hr>
                <div class="p-2">
                    <span>Baseado em 14 avaliações</span>
                    <br>
                </div>
                <button class="btn btn-light share-button">Compartilhar</button>

            </div>

            <!-- Coluna com card do curso à esquerda -->
            <div class="col-lg-3 col-md-12 checkout-card position-relative">
                <div class="checkout-card-wrapper shadow-lg border-0 rounded-lg">
                    <img src="{{ asset('extra-images/shop-gird-9.jpg') }}" class="checkout-card-img" alt="Curso Soft-skills">
                    <div class="checkout-card-body">
                        <ul class="checkout-list">
                            <li class="checkout-item">
                                <span class="fas fa-clock checkout-icon"></span> 12 horas de carga horária
                            </li>
                            <li class="checkout-item">
                                <span class="fas fa-users checkout-icon"></span> 3.621 alunos
                            </li>
                            <li class="checkout-item">
                                <span class="fas fa-book checkout-icon"></span> 15 aulas
                            </li>
                            <li class="checkout-item">
                                <span class="fas fa-cogs checkout-icon"></span> 13 módulos de conteúdo
                            </li>
                            <li class="checkout-item">
                                <span class="fas fa-calendar-alt checkout-icon"></span> Última atualização
                                21/01/2025
                            </li>
                            <li class="checkout-item">
                                <span class="fas fa-certificate checkout-icon"></span> Certificado de conclusão de
                                curso
                            </li>
                            <li class="checkout-item">
                                <span class="fas fa-download checkout-icon"></span> 12 arquivos para download
                            </li>
                        </ul>
                        <a href="{{ route('pages.checkout') }}" class="btn btn-success w-100">Comprar agora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#00345E" fill-opacity="1"
            d="M0,256L48,261.3C96,267,192,277,288,240C384,203,480,117,576,74.7C672,32,768,32,864,32C960,32,1056,32,1152,58.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <div class="p-4">
        @include('elements.custom-ui.card-skills')
        @include('elements.custom-ui.skills')
    </div>
    <br>
    <div class="desempenho-container  justify-content-left align-items-left">
        <img src="{{ asset('arquivos/imagens/desempenho.png') }}" alt="Desempenho" class="desempenho-img">
    </div>

    <br>
@endsection
