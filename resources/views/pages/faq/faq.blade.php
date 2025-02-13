@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
<div class="bg-danger text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto -->
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">Central de dúvidas</h1>
                <p class="fs-4">Tire aqui suas principais dúvidas sobre os motivos pelos quais você deve escolher a Decola School</p>
            </div>
            <!-- Imagem do foguete -->
               
                 <div class="col-lg-6 text-center position-relative">
                    <div class="rocket-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/744/744929.png" alt="Foguete" class="img-fluid rocket-icon">
                    </div>
                </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <h2 class="mb-4">Tendências Front-end e Soft-skills</h2>
    <div class="accordion" id="accordionExample">
        <!-- Item 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Por que estudar em uma escola de soft-skills?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Estudar em uma escola de soft-skills ajuda a desenvolver habilidades essenciais como comunicação, liderança, e resolução de problemas, que são fundamentais para o sucesso em qualquer área profissional.
                </div>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    O que são soft-skills e por que são importantes?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Soft-skills são habilidades interpessoais, como empatia, colaboração e adaptabilidade. Elas complementam as hard-skills (habilidades técnicas) e tornam os profissionais mais preparados para desafios do mercado.
                </div>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Qual a relação entre soft-skills e desenvolvimento front-end?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    No desenvolvimento front-end, soft-skills são essenciais para o trabalho em equipe, comunicação clara com designers e stakeholders, além de ajudar na resolução de problemas complexos.
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
