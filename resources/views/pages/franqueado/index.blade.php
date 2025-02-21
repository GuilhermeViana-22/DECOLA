@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
<div class="banner-franqueado text-white py-5 d-flex align-items-center">
    <div class="container text-center position-relative z-1">
        <h1 class="display-5 fw-bold">Seja um Franqueado da Decola!</h1>
        <p class="fs-4">Conectando pessoas ao conhecimento por meio de cursos inovadores. Agora, você pode fazer parte dessa revolução e transformar educação em um negócio lucrativo!</p>
        <a href="#register" class="btn btn-danger btn-lg mt-3">Registrar-se</a> <!-- Botão de registro dentro do banner -->
    </div>
</div>

<div class="container py-5">
    <h2 class="mb-4 text-center">Transforme Conhecimento em Negócio!</h2>
    <div class="row align-items-center">
        <!-- Texto à esquerda -->
        <div class="col-lg-6">
            <h3 class="display-6">Junte-se à Decola School e Construa Seu Próprio Negócio</h3>
            <p class="fs-4">Como franqueado da Decola, você será responsável por conectar milhares de alunos com a educação de qualidade que a Decola oferece. Não é só sobre ensino; é sobre fazer parte de um modelo de negócio inovador e de sucesso. Com a Decola, você vai transformar a educação em um negócio lucrativo, expandindo seus horizontes e ajudando a mudar a vida de muitas pessoas!</p>
        </div>

        <!-- Cards à direita -->
        <div class="col-lg-6">
            <div class="row g-3">
                @php
                    $cards = [
                        ['title' => 'Modelo de Negócio Comprovado', 'text' => 'O modelo de franquia da Decola é testado e comprovado. Ao entrar para a rede, você tem acesso a uma estrutura consolidada que garante seu sucesso.'],
                        ['title' => 'Treinamentos Inovadores', 'text' => 'Cursos de alta qualidade focados no que há de mais atual em soft-skills e desenvolvimento front-end, preparando alunos para o mercado de trabalho.'],
                        ['title' => 'Suporte Contínuo', 'text' => 'Como franqueado, você terá suporte contínuo da Decola, com treinamento e acompanhamento para garantir que sua unidade opere de maneira eficiente e rentável.'],
                        ['title' => 'Potencial de Crescimento', 'text' => 'O mercado de educação está em constante expansão. Com a Decola, você pode crescer rapidamente em um setor promissor com alta demanda.'],
                        ['title' => 'Modelo Escalável', 'text' => 'A franquia da Decola oferece um modelo escalável, permitindo a expansão do impacto educacional e aumento sustentável dos ganhos.']
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $card['title'] }}</h5>
                                <p class="card-text">{{ $card['text'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.col-md-6');

        cards.forEach((card, index) => {
            card.style.opacity = "0";
            card.style.transform = "translateX(-50px)";
            card.style.transition = "opacity 0.8s ease-in-out, transform 0.8s ease-in-out";

            setTimeout(() => {
                card.style.opacity = "1";
                card.style.transform = "translateX(0)";
            }, index * 1000); // Intervalo de 1.5s para cada card
        });
    });
    </script>
@endsection

