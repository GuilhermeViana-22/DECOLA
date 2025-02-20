<section class="why-choose-us py-5" style="background-color: #f5f5f5;">
    <h2 class="section-title text-center mb-4" style="color: #1a73e8;">Por que Escolher a Escola Decola</h2>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="stat-box text-center p-4 border rounded shadow-lg">
                    <div class="percentage" data-target="92">0%</div>
                    <p class="stat-text">dos nossos alunos desenvolveram melhor comunicação e inteligência emocional</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box text-center p-4 border rounded shadow-lg">
                    <div class="percentage" data-target="87">0%</div>
                    <p class="stat-text">obtiveram crescimento profissional após aprimorar suas habilidades
                        interpessoais</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box text-center p-4 border rounded shadow-lg">
                    <div class="percentage" data-target="78">0%</div>
                    <p class="stat-text">relataram aumento na autoconfiança e capacidade de liderança</p>
                </div>
            </div>
        </div>

        <div class="faq-section mt-5 text-center">
            <h3 class="faq-title mb-4" style="color: #1a73e8;">Perguntas sobre estudo</h3>
            <p class="faq-text mb-4">Dúvidas sobre estudar conosco? Nossa equipe de consultores e mentores está pronta
                para responder a todas as suas perguntas:</p>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="faq-item p-4 border rounded shadow-lg">
                        <i class="fas fa-chalkboard-teacher fa-3x mb-3" style="color: #1a73e8;"></i>
                        <h4>Consultoria Personalizada</h4>
                        <p>Receba o apoio de nossos mentores para ajudar no seu aprendizado de forma eficiente e
                            direcionada.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item p-4 border rounded shadow-lg">
                        <i class="fas fa-laptop-house fa-3x mb-3" style="color: #1a73e8;"></i>
                        <h4>Estudo Online</h4>
                        <p>Aprenda no seu ritmo, com a flexibilidade do ensino online, diretamente do conforto da sua
                            casa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const counters = document.querySelectorAll('.percentage');

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace('%', '');

            const increment = target / 50; // Velocidade da animação

            if (count < target) {
                counter.innerText = `${Math.ceil(count + increment)}%`;
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = `${target}%`;
            }
        };

        updateCount();
    });
</script>
