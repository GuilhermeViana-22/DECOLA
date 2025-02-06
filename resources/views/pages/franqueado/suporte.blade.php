@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
<div class="banner-suporte text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto -->
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">Central de Suporte</h1>
                <p class="fs-4">Encontre respostas rápidas para suas dúvidas e soluções para problemas comuns. Estamos aqui para ajudá-lo!</p>
            </div>
            <!-- Imagem -->
            <div class="col-md-6 text-center">
               
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <!-- Coluna de perguntas frequentes -->
        <div class="col-md-6 mb-4">
            <h3 class="display-6 mb-3">Perguntas Frequentes</h3>
            <div class="accordion" id="faqAccordion">
                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Como posso entrar em contato com o suporte?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Você pode entrar em contato conosco através do nosso formulário de contato, disponível no site, ou pelo telefone de atendimento disponível na página de contato.
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Quais são os horários de atendimento do suporte?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Nosso suporte está disponível de segunda a sexta-feira, das 8h às 18h. Fique à vontade para entrar em contato dentro deste horário!
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            O que fazer se não encontrar a solução para o meu problema?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Se você não encontrar a resposta que precisa na nossa Central de Suporte, não hesite em entrar em contato diretamente com nossa equipe através do chat ao vivo ou do e-mail de atendimento.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coluna de contato direto -->
        <div class="col-md-6">
            <h3 class="display-6 mb-3">Entrar em Contato</h3>
            <p class="fs-5 mb-4">Nosso time está pronto para ajudá-lo a qualquer momento. Se você não encontrou a resposta para sua dúvida, entre em contato diretamente através do formulário abaixo ou pelos nossos canais de comunicação.</p>
            <form action="#" method="POST">
                @csrf
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
                    <textarea class="form-control" id="message" rows="4" placeholder="Descreva sua dúvida ou problema"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</div>

<div class="container py-5">
    <h3 class="display-6 text-center mb-4">Outros Canais de Suporte</h3>
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <h4>Suporte por Chat ao Vivo</h4>
            <p>Fale diretamente com nossa equipe através do chat ao vivo, disponível no canto inferior direito da tela.</p>
        </div>
        <div class="col-md-4 mb-4">
            <h4>Atendimento Telefônico</h4>
            <p>Nosso número de suporte: <strong>(11) 1234-5678</strong>. Ligue para nós durante o horário comercial para resolver qualquer dúvida rapidamente.</p>
        </div>
        <div class="col-md-4 mb-4">
            <h4>Email de Suporte</h4>
            <p>Envie sua dúvida para <strong>suporte@decola.com.br</strong> e nossa equipe retornará o mais rápido possível.</p>
        </div>
    </div>
</div>

@endsection
