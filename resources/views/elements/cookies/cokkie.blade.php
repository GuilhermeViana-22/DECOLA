<!-- Banner de Cookies -->
<section id="cookieBanner" class="cookie-banner">
    <div class="cookie-content">
        <p class="cookie-text">
            ⭐ Ao continuar neste site, você aceita nossos <a href="/termos" class="cookie-link">Termos de Uso</a> e
            <a href="/privacidade" class="cookie-link">Política de Privacidade</a>.
            Todas as informações contidas são para benefícios dos usuários.
            Seus dados são restritos e não serão compartilhados com terceiros.
        </p>
        <div class="cookie-buttons">
            <button class="btn-accept" onclick="acceptCookies()">Aceitar</button>
            <button class="btn-decline" onclick="declineCookies()">Recusar</button>
        </div>
    </div>
</section>

<!-- Tela de fundo escurecida -->
<div id="overlay" class="overlay"></div>


<!-- CSS -->
<style>
  /* Estilos do banner de cookies */
.cookie-banner {
    position: fixed;
    bottom: -100%;
    left: 0;
    width: 100%;
    background: linear-gradient(135deg, #004085, #0062cc); /* Azul estilo escola de inglês */
    color: white;
    padding: 20px;
    text-align: center;
    transition: bottom 0.5s ease-in-out;
    z-index: 1000;
    box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2);
}

.cookie-content {
    max-width: 800px;
    margin: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.cookie-text {
    font-size: 20px;
    max-width: 90%;
    margin-bottom: 15px;
}

.cookie-link {
    color: #ffcc00;
    text-decoration: underline;
    font-weight: bold;
}

.cookie-buttons {
    display: flex;
    gap: 15px;
}

.btn-accept, .btn-decline {
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-accept {
    background-color: #28a745; /* Verde de sucesso */
    color: white;
}

.btn-accept:hover {
    background-color: #218838;
}

.btn-decline {
    background-color: #dc3545; /* Vermelho de erro */
    color: white;
}

.btn-decline:hover {
    background-color: #c82333;
}

/* Estilos para tela de fundo escurecida */
/* Estilos para tela de fundo escurecida */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
    display: none;
    pointer-events: auto; /* Permite bloquear os cliques */
}


@media (max-width: 768px) {
    .cookie-banner {
        padding: 15px;
    }
    .cookie-text {
        font-size: 18px;
    }
    .btn-accept, .btn-decline {
        font-size: 16px;
        padding: 10px 20px;
    }
}

</style>

<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    if (!localStorage.getItem("cookiesAccepted")) {
        document.getElementById("cookieBanner").style.bottom = "0";
        document.getElementById("overlay").style.display = "block"; // Exibe o fundo escurecido
    }
});

function acceptCookies() {
    localStorage.setItem("cookiesAccepted", "true");
    document.getElementById("cookieBanner").style.bottom = "-100%";
    document.getElementById("overlay").style.display = "none"; // Esconde o fundo escurecido e libera cliques
}

function declineCookies() {
    localStorage.setItem("cookiesAccepted", "false");
    document.getElementById("cookieBanner").style.bottom = "-100%";
    document.getElementById("overlay").style.display = "none"; // Esconde o fundo escurecido e libera cliques
}
</script>
