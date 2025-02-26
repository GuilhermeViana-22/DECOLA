<?php
$depoimentos = [
    [
        "mensagem" => "A Decola School me ajudou a desenvolver habilidades essenciais para a vida profissional. As aulas são práticas e interativas, o que me fez crescer muito na minha carreira!",
        "imagem" => "arquivos/user/user2.jpeg",
        "nome" => "Lucas Silva",
        "curso" => "Aluno de Soft Skills",
        "avaliacao" => 4
    ],
    [
        "mensagem" => "As aulas de soft skills da Decola School me ajudaram a melhorar minhas habilidades de liderança e comunicação. Sou mais confiante em reuniões e apresentações!",
        "imagem" => "arquivos/user/user3.jpeg",
        "nome" => "Fernanda Oliveira",
        "curso" => "Aluna de Soft Skills",
        "avaliacao" => 4
    ]
];
?>

<div class="depoimentos py-5">
    <div class="container text-center">
        <h2 class="text-white mb-5">O QUE DIZEM NOSSOS ALUNOS</h2>
        <div id="depoimentosCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($depoimentos as $index => $depoimento): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <div class="testimonial-box mx-auto">
                            <p class="depoimento-text fs-3">"<?= $depoimento["mensagem"] ?>"</p>
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="<?= asset($depoimento["imagem"]) ?>" alt="<?= $depoimento["nome"] ?>" class="depoimento-img">
                                <div>
                                    <p class="nome-aluno"><?= $depoimento["nome"] ?></p>
                                    <p class="curso-aluno"><?= $depoimento["curso"] ?></p>
                                    <div class="stars">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <?= $i < $depoimento["avaliacao"] ? "&#9733;" : "&#9734;" ?>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#depoimentosCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#depoimentosCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>
