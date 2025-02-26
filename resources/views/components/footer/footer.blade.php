<footer class="footer bg-white py-5">
    <div class="container">
        <div class="row">
            <!-- Logo da Escola e Descrição -->
            <div class="col-md-4 mb-4 mb-md-0 text-center text-md-start">
                <img src="{{ asset('arquivos/logos/1.png') }}" alt="Decola School" class="mb-3" style="max-width: 150px;">
                <p class="text-muted">Decola School é uma escola inovadora focada no desenvolvimento de habilidades
                    essenciais para a vida profissional, com cursos práticos e interativos.</p>
            </div>

            <!-- Links Rápidos -->
            <div class="col-12 col-md-2 mb-4">
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
            <div class="col-12 col-md-3 mb-4">
                <h5 class="text-dark text-center text-md-start">Quem São os Professores?</h5>
                <div class="d-flex justify-content-center justify-content-md-start flex-wrap">
                    <a href="{{ route('instrutores') }}" class="m-1">
                        <img src="{{ asset('arquivos/professor/felipe.png') }}" alt="Professor 1"
                            class="rounded-circle border border-primary"
                            style="width: 45px; height: 45px; object-fit: cover;">
                    </a>
                    <a href="{{ route('instrutores') }}" class="m-1">
                        <img src="{{ asset('arquivos/professor/barreto.png') }}" alt="Professor 2"
                            class="rounded-circle border border-primary"
                            style="width: 45px; height: 45px; object-fit: cover;">
                    </a>
                    <a href="{{ route('instrutores') }}" class="m-1">
                        <img src="{{ asset('arquivos/professor/carolina.png') }}" alt="Professor 3"
                            class="rounded-circle border border-primary"
                            style="width: 45px; height: 45px; object-fit: cover;">
                    </a>
                    <a href="{{ route('instrutores') }}" class="m-1">
                        <img src="{{ asset('arquivos/professor/estevam.png') }}" alt="Professor 4"
                            class="rounded-circle border border-primary"
                            style="width: 45px; height: 45px; object-fit: cover;">
                    </a>
                </div>
                <ul class="list-unstyled mt-2 text-center text-md-start">
                    <li><a href="{{ route('instrutores') }}" class="text-muted text-decoration-none">Professores Qualificados</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Metodologia</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Depoimentos</a></li>
                </ul>
            </div>
            <!-- Redes Sociais -->
            <div class="col-md-3 text-center text-md-start">
                <h5 class="text-dark">Redes Sociais</h5>
                <ul class="list-unstyled d-flex justify-content-center justify-content-md-start">
                    <li class="me-3"><a href="#" class="text-muted"><i class="fab fa-facebook-f fa-lg"></i></a></li>
                    <li class="me-3"><a href="#" class="text-muted"><i class="fab fa-twitter fa-lg"></i></a></li>
                    <li class="me-3"><a href="#" class="text-muted"><i class="fab fa-instagram fa-lg"></i></a></li>
                    <li class="me-3"><a href="#" class="text-muted"><i class="fab fa-linkedin-in fa-lg"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Linha separadora -->
        <hr class="my-4">

        <!-- Selos e Formas de Pagamento -->
        <div class="row mt-4 text-center text-md-start">
            <div class="col-md-3 mb-3">
                <h5 class="text-dark">Selos e certificados</h5>
                <img src="{{ asset('arquivos/selos/stamp3.png') }}" alt="Navegação Segura Google" style="max-width: 120px;">
            </div>
            <div class="col-md-9">
                <h5 class="text-dark">Formas de pagamento</h5>
                <div class="row justify-content-center justify-content-md-start g-2">
                    <div class="col-4 col-md-2"><img src="{{ asset('arquivos/pagamentos/payment1.png') }}" class="pagamento" alt="Visa" class="w-100"></div>
                    <div class="col-4 col-md-2"><img src="{{ asset('arquivos/pagamentos/payment2.png') }}" class="pagamento" alt="Mastercard" class="w-100"></div>
                    <div class="col-4 col-md-2"><img src="{{ asset('arquivos/pagamentos/payment3.png') }}" class="pagamento" alt="Hipercard" class="w-100"></div>
                    <div class="col-4 col-md-2"><img src="{{ asset('arquivos/pagamentos/payment4.png') }}" class="pagamento" alt="American Express" class="w-100"></div>
                    <div class="col-4 col-md-2"><img src="{{ asset('arquivos/pagamentos/payment5.png') }}" class="pagamento" alt="Elo" class="w-100"></div>
                    <div class="col-4 col-md-2"><img src="{{ asset('arquivos/pagamentos/payment7.png') }}" class="pagamento" alt="PIX" class="w-100"></div>
                </div>
            </div>
        </div>

        <!-- Rodapé com Direitos Autorais -->
        <div class="row mt-4">
            <div class="col-12 text-center text-md-start">
                <p class="text-muted mb-0">© 2025 Decola School. Todos os direitos reservados.</p>
                <p class="text-muted">Desenvolvido por <strong>Guilherme Viana</strong></p>
            </div>
        </div>
    </div>
</footer>

