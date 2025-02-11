<div class="row p-4">
    <div class="col-12 col-md-6">
        <section class="flexibilidade-section">
            <div class="flexibilidade-header" onclick="toggleContent()">
                <h5>Flexibilidade</h5>
                <i class="fas fa-chevron-down" id="dropdown-icon"></i>
            </div>
            <div class="flexibilidade-content" id="flexibilidade-content">
                <ul>
                    <li>✔ Cronograma Geral e Ementa: Acesse todos os detalhes e a programação completa do curso.</li>
                    <li>✔ Convite e Aula Inaugural:
                        <ul>
                            <li>1 Página | Aula de boas-vindas para entender como o curso funcionará.</li>
                            <li>32:37 | Vídeo exclusivo para começar sua jornada.</li>
                        </ul>
                    </li>
                    <li>✔ Material de Apoio e Ementas: Cronograma detalhado (10 páginas) e conteúdos extras para estudo.</li>
                </ul>
            </div>
        </section>
    </div>

    <div class="col-12 col-md-6">
        <section class="modulos-curso-section">
            <div class="modulos-curso-header" onclick="toggleModulosContent()">
                <h5>Módulos do Curso</h5>
                <i class="fas fa-chevron-down" id="modulos-dropdown-icon"></i>
            </div>
            <div class="modulos-curso-content" id="modulos-curso-content">
                <ul>
                    <li>✔ Felicidade</li>
                    <li>✔ Comunicação</li>
                    <li>✔ Flexibilidade e Resiliência</li>
                    <li>✔ Liderança e Trabalho em Equipe</li>
                    <li>✔ Criatividade</li>
                    <li>✔ Proatividade</li>
                    <li>✔ Empatia</li>
                    <li>✔ Ética</li>
                    <li>✔ Pensamento Crítico</li>
                    <li>✔ Educação Financeira</li>
                    <li>✔ Inteligência Emocional</li>
                    <li>✔ Empreendedorismo</li>
                </ul>
            </div>
        </section>
    </div>
</div>

<style>
    .flexibilidade-section, .modulos-curso-section {
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 15px;
        background-color: #f9f9f9;
    }

    .flexibilidade-header, .modulos-curso-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        padding: 10px;
        background: #e0e0e0;
        border-radius: 5px;
    }

    .flexibilidade-content, .modulos-curso-content {
        display: none;
        padding-top: 10px;
    }

    .open .fas {
        transform: rotate(180deg);
    }
</style>

<script>
    function toggleContent() {
        const content = document.getElementById('flexibilidade-content');
        const icon = document.getElementById('dropdown-icon');
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
        icon.parentElement.classList.toggle('open');
    }

    function toggleModulosContent() {
        const content = document.getElementById('modulos-curso-content');
        const icon = document.getElementById('modulos-dropdown-icon');
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
        icon.parentElement.classList.toggle('open');
    }
</script>
