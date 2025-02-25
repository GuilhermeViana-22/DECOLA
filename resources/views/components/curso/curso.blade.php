<?php
$unidades = [
    'Soft skills - Unidade Franco da Rocha',
    'Soft skills - Unidade Jaraguá',
    'Soft skills - Unidade Caieiras',
    'Soft skills - Unidade Perus',
    'Soft skills - Unidade Francisco Morato'
];

// Função para gerar slugs corretamente
function gerarSlug($nome) {
    $slug = strtolower(trim($nome)); // Converter para minúsculas e remover espaços extras
    $slug = str_replace([' - ', ' '], '-', $slug); // Substituir espaços e traços por hífen
    $slug = preg_replace('/[^a-z0-9\-]/', '', $slug); // Remover caracteres especiais
    return $slug;
}
?>

<section id="cursos" class="curso-container py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="section-title">Principais cursos</h2>
        <div class="row justify-content-center">
            <?php foreach ($unidades as $unidade) :
                $slug = gerarSlug($unidade); ?>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-4"data-anime="left">
                    <div class="curso-card card shadow-lg border-0 rounded-lg position-relative">
                        <img src="<?= asset('extra-images/shop-gird-9.jpg') ?>" class="card-img-top" alt="Curso Soft-skills">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 fw-bold text-dark mb-2">Soft-skills</h5>
                            <p class="card-text text-muted mb-3">Aprenda as 12 habilidades do futuro pela UNESCO para se destacar no mercado de trabalho.</p>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="ratings">
                                    <span class="fas fa-star text-warning"></span>
                                    <span class="fas fa-star text-warning"></span>
                                    <span class="fas fa-star text-warning"></span>
                                    <span class="fas fa-star text-warning"></span>
                                    <span class="fas fa-star-half-alt text-warning"></span>
                                </div>
                                <div class="students text-muted fs-6">Mais de 3.500 alunos</div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <p class="price mb-0 fs-5 fw-bold text-secondary"><span class="fas fa-tag"></span> R$ 2.376,00 à vista</p>
                                <p class="price ms-2 mb-0 fs-4 text-success fw-bold">12x de <span class="fs-4">R$ 198,00</span></p>
                            </div>
                        </div>
                        <a href="https://decola.eadplataforma.app/curso/<?= $slug ?>" class="btn btn-primary w-100 py-3 text-white fs-5 fw-bold">
                             <?= $unidade ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
