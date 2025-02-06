@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
<div class="banner-franqueado text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto -->
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">Seja um Franqueado da Decola!</h1>
                <p class="fs-4">Conectando pessoas ao conhecimento por meio de cursos inovadores. Agora, você pode fazer parte dessa revolução e transformar educação em um negócio lucrativo!</p>
                <p class="fs-5">Transforme conhecimento em negócio e seja parte de uma rede que capacita pessoas para o futuro com treinamentos em soft-skills e desenvolvimento front-end. Entre para a Decola School e faça parte de um projeto que cresce a cada dia!</p>
                <a href="#register" class="btn btn-danger btn-lg">Registrar-se</a> <!-- Botão de registro -->
            </div>
            <!-- Imagem do foguete -->
            <div class="col-md-6 text-center">
                <!-- Inserir imagem ou ícone relacionado ao tema de franquia ou foguete -->
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <h2 class="mb-4">Transforme Conhecimento em Negócio!</h2>
    <div class="row">
        <!-- Texto grande à esquerda -->
        <div class="col-md-6">
            <h3 class="display-6">Junte-se à Decola School e Construa Seu Próprio Negócio</h3>
            <p class="fs-4">Como franqueado da Decola, você será responsável por conectar milhares de alunos com a educação de qualidade que a Decola oferece. Não é só sobre ensino; é sobre fazer parte de um modelo de negócio inovador e de sucesso. Com a Decola, você vai transformar a educação em um negócio lucrativo, expandindo seus horizontes e ajudando a mudar a vida de muitas pessoas!</p>
        </div>
        <!-- Vantagens à direita -->
        <div class="col-md-6">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Modelo de Negócio Comprovado</h5>
                            <p class="card-text">O modelo de franquia da Decola é testado e comprovado. Ao entrar para a rede, você tem acesso a uma estrutura consolidada que garante seu sucesso.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Treinamentos Inovadores</h5>
                            <p class="card-text">A Decola oferece cursos de alta qualidade, focados no que há de mais atual em soft-skills e desenvolvimento front-end, garantindo que seus alunos estejam prontos para o mercado de trabalho.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Suporte Contínuo</h5>
                            <p class="card-text">Como franqueado, você terá suporte contínuo da Decola, com treinamento e acompanhamento para garantir que sua unidade opere de maneira eficiente e rentável.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Potencial de Crescimento</h5>
                            <p class="card-text">O mercado de educação está em constante expansão, e com a Decola você tem a oportunidade de crescer rapidamente em um mercado promissor, com alta demanda por qualificação profissional.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Modelo Escalável</h5>
                            <p class="card-text">A franquia da Decola oferece um modelo de negócio escalável, permitindo que você expanda seu impacto educacional e aumente seus ganhos de maneira sustentável.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
