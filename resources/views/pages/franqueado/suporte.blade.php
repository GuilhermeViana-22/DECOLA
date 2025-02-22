@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
    <div class="banner-suporte text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texto -->
                <div class="col-md-6">
                    <h1 class="display-5 fw-bold">Central de Suporte</h1>
                    <p class="fs-4">Encontre respostas rápidas para suas dúvidas e soluções para problemas comuns. Estamos
                        aqui para ajudá-lo!</p>
                </div>
                <!-- Imagem -->
                <div class="col-md-6 text-center">

                </div>
            </div>
        </div>
    </div>



    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <h3 class="display-6 mb-3">Perguntas Frequentes</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true">
                                Como posso entrar em contato com o suporte?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                Você pode entrar em contato conosco através do formulário de contato ou pelo telefone na
                                página de contato.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                Quais são os horários de atendimento do suporte?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Nosso suporte está disponível de segunda a sexta-feira, das 8h às 18h.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h3 class="display-6 mb-3">Entrar em Contato</h3>
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Seu Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Digite seu nome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Seu E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Descreva sua dúvida"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <h3 class="display-6 text-center mb-4">Outros Canais de Suporte</h3>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <h4>Suporte por Chat ao Vivo</h4>
                <p>Fale diretamente com nossa equipe através do chat ao vivo.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4>Atendimento Telefônico</h4>
                <p>Nosso número de suporte: <strong>(11) 1234-5678</strong>.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4>Email de Suporte</h4>
                <p>Envie sua dúvida para <strong>suporte@decola.com.br</strong>.</p>
            </div>
        </div>
    </div>
@endsection
