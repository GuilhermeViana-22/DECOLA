<section class="why-choose-us py-5">
    <h2 class="section-title">Por que Escolher a Escola Decola</h2>
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="stat-box">
            <div class="percentage" data-target="92">0%</div>
            <p class="stat-text">dos nossos alunos desenvolveram melhor comunicação e inteligência emocional</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stat-box">
            <div class="percentage" data-target="87">0%</div>
            <p class="stat-text">obtiveram crescimento profissional após aprimorar suas habilidades interpessoais</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stat-box">
            <div class="percentage" data-target="78">0%</div>
            <p class="stat-text">relataram aumento na autoconfiança e capacidade de liderança</p>
          </div>
        </div>
      </div>

      <div class="faq-section mt-5 text-center">
        <h3 class="faq-title">Perguntas sobre estudo</h3>
        <p class="faq-text">Dúvidas sobre estudar conosco?<br>Nossa equipe de consultores e mentores está pronta para responder a todas as suas perguntas:</p>
        <button class="btn btn-primary btn-lg">Pergunte agora</button>
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
