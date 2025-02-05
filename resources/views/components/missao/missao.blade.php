

<section id="missao" class="missao py-5">
    <div class="container">
        <h2 class="missao-header text-center mb-5">
            Na Decola, desenvolvemos soft skills para todas as fases da vida, desde a infância até a idade adulta.<br>
            Preparamos indivíduos para superar desafios, construir conexões e alcançar o sucesso com confiança e propósito.
        </h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mb-4">
                <div class="missao-card text-center p-4 shadow-sm">
                    <div class="missao-icon mb-3">
                        <i class="fas fa-pencil fa-lg text-primary"></i>
                    </div>
                    <h3 class="missao-title">Missão</h3>
                    <p class="missao-text">
                        Transformar vidas desenvolvendo soft skills para todas as fases da jornada, preparando indivíduos para o futuro.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4">
                <div class="missao-card text-center p-4 shadow-sm">
                    <div class="missao-icon mb-3">
                        <i class="fas fa-eye fa-lg text-danger"></i>
                    </div>
                    <h3 class="missao-title">Visão</h3>
                    <p class="missao-text">
                        Ser referência no ensino de habilidades humanas, formando líderes e profissionais preparados para impactar o mundo.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4">
                <div class="missao-card text-center p-4 shadow-sm">
                    <div class="missao-icon mb-3">
                        <i class="fas fa-handshake fa-lg text-success"></i>
                    </div>
                    <h3 class="missao-title">Valores</h3>
                    <p class="missao-text">
                        Empatia, colaboração, ética, inovação e aprendizado contínuo.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4">
                <div class="missao-card text-center p-4 shadow-sm">
                    <div class="missao-icon mb-3">
                        <i class="fas fa-users fa-lg text-warning"></i>
                    </div>
                    <h3 class="missao-title">Compromisso</h3>
                    <p class="missao-text">
                        Estamos comprometidos com o crescimento pessoal e profissional de cada indivíduo, promovendo impacto positivo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cursor Gradiente -->
<div class="cursor-gradient"></div>

<!-- JS para fazer o cursor seguir o mouse -->
<script>
    const cursor = document.querySelector('.cursor-gradient');
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = `${e.pageX - cursor.offsetWidth / 2}px`;
        cursor.style.top = `${e.pageY - cursor.offsetHeight / 2}px`;
    });
</script>
