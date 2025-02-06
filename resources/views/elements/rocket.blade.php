<style>
/* Centraliza a section */
.section-container {
  height: 100vh; /* Garante que a altura ocupe toda a tela */
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  background-color: #ffffff; /* Cor de fundo branco */
}

/* Container do foguete */
.rocket-container {
  cursor: pointer;
}

/* Estilo do foguete */
.rocket {
  font-size: 50px;
  color: #ff0000; /* Cor do foguete vermelha */
  transition: transform 1s ease;
  transform: rotate(0deg); /* Foguete apontando para cima (sem rota��o) */
}

/* Estilo do texto */
.text {
  margin-top: 10px;
  color: black;
  font-size: 16px;
  font-weight: bold;
}

.hidden {
  display: none; /* Esconde o foguete ap�s a anima��o */
}
</style>



<span><a  id="rocketContainer"><i id="rocketIcon" class="fas fa-rocket rocket animate__animated animate__jello"></i></a></span>

<script>
document.getElementById('rocketContainer').onclick = function() {
  const rocket = document.getElementById('rocketIcon');
  const container = document.getElementById('rocketContainer');

  // Adiciona a anima��o de voo para cima
  rocket.style.transform = 'translateY(-300px)'; // Foguete voando para cima no eixo Y
  container.style.opacity = '0'; // Faz o foguete desaparecer

  // Ap�s a anima��o, esconde o foguete e rola para o topo da p�gina
  setTimeout(() => {
    container.classList.add('hidden'); // Esconde o foguete
    window.scrollTo({ top: 0, behavior: 'smooth' }); // Rola para o topo da p�gina
  }, 1000); // Tempo para completar a anima��o
};
</script>
