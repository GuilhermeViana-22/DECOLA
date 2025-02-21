@extends('layouts.app')

@section('content')
<!-- Seção inicial com fundo gradiente e texto moderno -->
<div class="bg-gradient py-5 text-white" style="background: linear-gradient(to right, #4a00e0, #8e2de2);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="text-dark fw-bold display-3">Nossos Instrutores</h1>
                <p class="text-dark fs-3">Conheça os profissionais que fazem parte do time da Decola School.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/744/744929.png" alt="Foguete" class="img-fluid" style="max-width: 400px;">
            </div>
        </div>
    </div>
</div>

<!-- Carrossel de Instrutores -->
<div class="container py-5">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Professor 1 -->
            <div class="carousel-item active">
                <div class="card border-0 p-4" style="background: #f8f9fa;">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center py-4">
                            <img src="{{ asset('arquivos/professor/felipe.png') }}" alt="Felipe Escaleira" class="rounded-circle img-fluid" style="max-width: 300px; filter: brightness(1.2); border: 5px solid red;">
                        </div>
                        <div class="col-md-8 py-4">
                            <h2 class="fw-bold display-5">Felipe Escaleira</h2>
                            <span class="badge bg-primary fs-4 mb-3">FOUNDER</span>
                            <p class="fs-4">O mais jovem empreendedor do Brasil, recordista nacional, autor, professor e poliglota. Em dezembro de 2022, fundou o Decola para transformar aprendizado em impulso.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professor 2 -->
            <div class="carousel-item">
                <div class="card border-0 p-4" style="background: #f8f9fa;">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center py-4">
                            <img src="{{ asset('arquivos/professor/carolina.png') }}" alt="Ana Silva" class="rounded-circle img-fluid" style="max-width: 300px; filter: brightness(1.2); border: 5px solid red;">
                        </div>
                        <div class="col-md-8 py-4">
                            <h2 class="fw-bold display-5">Carolina Pereira</h2>
                            <span class="badge bg-secondary fs-4 mb-3">Mentora</span>
                            <p class="fs-4">Atuando há mais de 2 décadas na Educação, a mentora Carolina Pereira é franqueada e responsável pela unidade Caieiras.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professor 3 -->
            <div class="carousel-item">
                <div class="card border-0 p-4" style="background: #f8f9fa;">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center py-4">
                            <img src="{{ asset('arquivos/professor/estevam.png') }}" alt="Carlos Mendes" class="rounded-circle img-fluid" style="max-width: 300px; filter: brightness(1.2); border: 5px solid red;">
                        </div>
                        <div class="col-md-8 py-4">
                            <h2 class="fw-bold display-5">Olavio Estevam</h2>
                            <span class="badge bg-success fs-4 mb-3">Mentor</span>
                            <p class="fs-4">Apaixonado pela educação e pelas soft skills, Olavio Estevam é franqueado na cidade de São Paulo, em Perus, Caieiras e Jaraguá.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professor 4 -->
            <div class="carousel-item">
                <div class="card border-0 p-4" style="background: #f8f9fa;">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center py-4">
                            <img src="{{ asset('arquivos/professor/barreto.png') }}" alt="Carlos Mendes" class="rounded-circle img-fluid" style="max-width: 300px; filter: brightness(1.2); border: 5px solid red;">
                        </div>
                        <div class="col-md-8 py-4">
                            <h2 class="fw-bold display-5">Carlos Mendes</h2>
                            <span class="badge bg-success fs-4 mb-3">Mentor especialista</span>
                            <p class="fs-4">Especialista em soft skills, Ely Barreto atua há 4 anos na Decola, sendo Mater franqueado em todo Estado de São Paulo, além de gerir a franquia na cidade de Francisco Morato.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicadores (bolinhas) centralizados abaixo do carrossel -->
        <div class="carousel-indicators d-flex justify-content-center">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
    </div>
</div>
@endsection
