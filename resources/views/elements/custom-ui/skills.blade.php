<div class="container">
    <div class="row">
        <!-- Dropdown Flexibilidade -->
        <div class="col-12 col-md-6 col-sm-12">
            <section class="dropdown-section">
                <div class="dropdown-header d-flex justify-content-between align-items-center" onclick="toggleContent('flexibilidade-content', 'dropdown-icon')">
                    <h5><i class="fas fa-handshake"></i> Flexibilidade</h5>
                    <i class="fas fa-chevron-down" id="dropdown-icon"></i>
                </div>
                <div class="dropdown-content" id="flexibilidade-content">
                    <ul>
                        <li><i class="fas fa-calendar-alt"></i> Cronograma Geral e Ementa: Programação completa do curso.</li>
                        <li><i class="fas fa-chalkboard-teacher"></i> Convite e Aula Inaugural:
                            <ul>
                                <li><i class="fas fa-file-alt"></i> 1 Página | Aula de boas-vindas.</li>
                                <li><i class="fas fa-video"></i> 32:37 | Vídeo exclusivo.</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-book"></i> Material de Apoio e Ementas: Conteúdos extras para estudo.</li>
                    </ul>
                </div>
            </section>
        </div>

        <!-- Dropdown Módulos do Curso -->
        <div class="col-12 col-md-6 col-sm-12">
            <section class="dropdown-section">
                <div class="dropdown-header d-flex justify-content-between align-items-center" onclick="toggleContent('modulos-curso-content', 'modulos-dropdown-icon')">
                    <h5><i class="fas fa-layer-group"></i> Módulos do Curso</h5>
                    <i class="fas fa-chevron-down" id="modulos-dropdown-icon"></i>
                </div>
                <div class="dropdown-content" id="modulos-curso-content">
                    <ul>
                        <li><i class="fas fa-smile"></i> Felicidade</li>
                        <li><i class="fas fa-comments"></i> Comunicação</li>
                        <li><i class="fas fa-sync-alt"></i> Flexibilidade e Resiliência</li>
                        <li><i class="fas fa-users"></i> Liderança e Trabalho em Equipe</li>
                        <li><i class="fas fa-lightbulb"></i> Criatividade</li>
                        <li><i class="fas fa-running"></i> Proatividade</li>
                        <li><i class="fas fa-heart"></i> Empatia</li>
                        <li><i class="fas fa-balance-scale"></i> Ética</li>
                        <li><i class="fas fa-brain"></i> Pensamento Crítico</li>
                        <li><i class="fas fa-coins"></i> Educação Financeira</li>
                        <li><i class="fas fa-chart-line"></i> Inteligência Emocional</li>
                        <li><i class="fas fa-briefcase"></i> Empreendedorismo</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>


<script>
    function toggleContent(contentId, iconId) {
        const content = document.getElementById(contentId);
        const icon = document.getElementById(iconId);

        content.classList.toggle('open');
        icon.classList.toggle('fa-chevron-up');
        icon.classList.toggle('fa-chevron-down');
    }
</script>
