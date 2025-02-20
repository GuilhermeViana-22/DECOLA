<section class="depoimentos py-5" style="background-color: #00345e;">
    <div class="container text-center">
        <h2 class="text-white mb-5">O QUE DIZEM NOSSOS ALUNOS</h2>
        <div id="depoimentosCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Depoimento 1 -->
                <div class="carousel-item active">
                    <div class="testimonial-box shadow-lg p-4 bg-white rounded text-dark mx-auto" style="max-width: 600px;">
                        <p class="fst-italic text-primary">"A Decola School me ajudou a desenvolver habilidades essenciais para a vida profissional. As aulas são práticas e interativas, o que me fez crescer muito na minha carreira!"</p>
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('arquivos/user/user2.jpeg') }}" alt="Lucas Silva" class="img-fluid rounded-circle me-3" style="width: 60px; height: 60px; border: 3px solid #ff4c4c;">
                            <div>
                                <p class="mb-1 fw-bold">Lucas Silva</p>
                                <p class="mb-1 text-muted">Aluno de Soft Skills</p>
                                <div class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Depoimento 2 -->
                <div class="carousel-item">
                    <div class="testimonial-box shadow-lg p-4 bg-white rounded text-dark mx-auto" style="max-width: 600px;">
                        <p class="fst-italic text-primary">"As aulas de soft skills da Decola School me ajudaram a melhorar minhas habilidades de liderança e comunicação. Sou mais confiante em reuniões e apresentações!"</p>
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('arquivos/user/user3.jpeg') }}" alt="Fernanda Oliveira" class="img-fluid rounded-circle me-3" style="width: 60px; height: 60px; border: 3px solid #ff4c4c;">
                            <div>
                                <p class="mb-1 fw-bold">Fernanda Oliveira</p>
                                <p class="mb-1 text-muted">Aluna de Soft Skills</p>
                                <div class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controles do Carrossel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#depoimentosCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#depoimentosCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</section>

<style>
    .testimonial-box {
        max-width: 600px;
        text-align: center;
    }
</style>
