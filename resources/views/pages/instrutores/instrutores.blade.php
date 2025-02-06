@extends('layouts.app')

@section('content')
<!-- Seção inicial com fundo gradiente e texto moderno -->
<div class="bg-gradient py-5 text-white" style="background: linear-gradient(to right, #4a00e0, #8e2de2);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="text-dark fw-bold">Nossos Instrutores</h1>
                <p class=" text-dark fs-5">Conheça os profissionais que fazem parte do time da Decola School.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/744/744929.png" alt="Foguete" class="img-fluid" style="max-height: 200px;">
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
                <div class="card border-0 shadow-lg">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center py-4">
                            <img src="{{ asset('arquivos/professor/felipe.png') }}" alt="Felipe Escaleira" class="rounded-circle img-fluid" style="max-width: 200px;">
                        </div>
                        <div class="col-md-8 py-4">
                            <h2 class="fw-bold">Felipe Escaleira</h2>
                            <span class="badge bg-primary mb-2">FOUNDER</span>
                            <p>O mais jovem empreendedor do Brasil, recordista nacional, autor, professor e poliglota. Em dezembro de 2022, fundou o Decola para transformar aprendizado em impulso.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professor 2 -->
            <div class="carousel-item">
                <div class="card border-0 shadow-lg">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center py-4">
                            <img src="{{ asset('arquivos/professor/felipe.png') }}" alt="Ana Silva" class="rounded-circle img-fluid" style="max-width: 200px;">
                        </div>
                        <div class="col-md-8 py-4">
                            <h2 class="fw-bold">Ana Silva</h2>
                            <span class="badge bg-secondary mb-2">MENTORA</span>
                            <p>Especialista em educação digital, com mais de 10 anos de experiência na formação de jovens talentos para o mercado tecnológico.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professor 3 -->
            <div class="carousel-item">
                <div class="card border-0 shadow-lg">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center py-4">
                            <img src="{{ asset('arquivos/professor/felipe.png') }}" alt="Carlos Mendes" class="rounded-circle img-fluid" style="max-width: 200px;">
                        </div>
                        <div class="col-md-8 py-4">
                            <h2 class="fw-bold">Carlos Mendes</h2>
                            <span class="badge bg-success mb-2">COACH</span>
                            <p>Coach de carreira e especialista em desenvolvimento pessoal, ajudando alunos a desbloquear seu verdadeiro potencial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botões de navegação -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</div>
@endsection
