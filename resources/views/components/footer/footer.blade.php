<footer class="footer bg-white py-5">
    <div class="container">
        <div class="row">
            <!-- Logo da Escola e Descrição -->
            <div class="col-md-4 mb-4 mb-md-0">
                <img src="{{ asset('arquivos/logos/1.png') }}" alt="Decola School" class="mb-3" style="max-width: 150px;">
                <p class="text-muted">Decola School é uma escola inovadora focada no desenvolvimento de habilidades
                    essenciais para a vida profissional, com cursos práticos e interativos.</p>
            </div>

            <!-- Links Rápidos -->
            <div class="col-md-2 mb-4 mb-md-0">
                <h5 class="text-dark">Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-muted text-decoration-none">Início</a></li>
                    <li><a href="{{ route('home') }}" class="text-muted text-decoration-none">Cursos</a></li>
                    <li><a href="{{ route('pages.blog') }}" class="text-muted text-decoration-none">Blog</a></li>
                    <li><a href="{{ route('pages.faq') }}" class="text-muted text-decoration-none">FAQ</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Contato</a></li>
                </ul>
            </div>

            <!-- Quem São os Professores -->
            <!-- Quem São os Professores -->
            <div class="col-md-3 mb-4 mb-md-0">
                <h5 class="text-dark mt-1">Quem São os Professores?</h5>
                <div class="d-flex align-items-center">
                    <a href="{{ route('instrutores') }}">
                        <img src="{{ asset('arquivos/professor/felipe.png') }}" alt="Professor 1"
                            class="rounded-circle border border-primary"
                            style="width: 45px; height: 45px; object-fit: cover; margin-right: 5px;">
                    </a>
                    <a href="{{ route('instrutores') }}">
                        <img src="{{ asset('arquivos/professor/barreto.png') }}" alt="Professor 2"
                            class="rounded-circle border border-primary"
                            style="width: 45px; height: 45px; object-fit: cover; margin-right: 5px;">
                    </a>
                    <a href="{{ route('instrutores') }}">
                        <img src="{{ asset('arquivos/professor/carolina.png') }}" alt="Professor 3"
                            class="rounded-circle border border-primary"
                            style="width: 45px; height: 45px; object-fit: cover; margin-right: 5px;">
                    </a>
                    <a href="{{ route('instrutores') }}">
                        <img src="{{ asset('arquivos/professor/estevam.png') }}" alt="Professor 4"
                            class="rounded-circle border border-primary"
                            style="width: 45px; height: 45px; object-fit: cover;">
                    </a>
                </div>
                <ul class="list-unstyled mt-1 ms-1">
                    <li><a href="{{ route('instrutores') }}" class="text-muted text-decoration-none">Professores
                            Qualificados</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Metodologia</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Depoimentos</a></li>
                </ul>
            </div>

            <!-- Redes Sociais -->
            <div class="col-md-3 mb-4 mb-md-0">
                <h5 class="text-dark">Redes Sociais</h5>
                <ul class="list-unstyled d-flex">
                    <li class="me-3"><a href="#" class="text-muted"><i class="fab fa-facebook-f fa-lg"></i></a>
                    </li>
                    <li class="me-3"><a href="#" class="text-muted"><i class="fab fa-twitter fa-lg"></i></a>
                    </li>
                    <li class="me-3"><a href="#" class="text-muted"><i class="fab fa-instagram fa-lg"></i></a>
                    </li>
                    <li class="me-3"><a href="#" class="text-muted"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Linha separadora -->
        <hr class="my-4">

        <!-- Selos e Formas de Pagamento -->
        <div class="row mt-4 align-items-center">
            <div class="col-md-2 text-center text-md-start mb-3 mb-md-0">
                <h5 class="text-dark">Selos e certificados</h5>
                <img src="{{ asset('arquivos/selos/stamp3.png') }}" alt="Navegação Segura Google"
                    style="max-width: 120px;">
            </div>
            <div class="col-md-10 text-center text-md-start mt-3">
                <h5 class="text-dark">Formas de pagamento</h5>
                <div class="d-flex justify-content-md-start justify-content-center flex-wrap gap-2">
                    <img src="{{ asset('arquivos/pagamentos/payment1.png') }}" alt="Visa" class="logo-pagamento">
                    <img src="{{ asset('arquivos/pagamentos/payment2.png') }}" alt="Mastercard" class="logo-pagamento">
                    <img src="{{ asset('arquivos/pagamentos/payment3.png') }}" alt="Hipercard" class="logo-pagamento">
                    <img src="{{ asset('arquivos/pagamentos/payment4.png') }}" alt="American Express"
                        class="logo-pagamento">
                    <img src="{{ asset('arquivos/pagamentos/payment5.png') }}" alt="Elo" class="logo-pagamento">
                    <img src="{{ asset('arquivos/pagamentos/payment7.png') }}" alt="PIX" class="logo-pagamento">
                </div>
            </div>
        </div>

        <!-- Rodapé com Direitos Autorais -->
        <div class="row mt-4">
            <div class="col-12 text-start">
                <p class="text-muted mb-0">© 2025 Decola School. Todos os direitos reservados.</p>
                <p class="text-muted">Desenvolvido por <strong>Guilherme Viana</strong></p>
            </div>
        </div>
    </div>
</footer>

<!-- Link para Font Awesome (para ícones) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
