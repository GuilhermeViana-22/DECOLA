<!-- Banner de Cookies - Decola School -->
<section id="cookieBanner" class="cookie-banner">
    <div class="cookie-content">
        <h2 class="cookie-title">Painel de Configuração de Privacidade</h2>
        <p class="cookie-text">
            Ao acessar o site da <strong>Decola School</strong>, algumas informações podem ser armazenadas no seu navegador através de cookies.
            Esses dados são usados para aprimorar sua experiência, lembrar suas preferências e garantir o funcionamento adequado da plataforma.
        </p>
        <p class="cookie-text">
            Você pode escolher quais tipos de cookies deseja permitir. Bloquear certas categorias pode afetar algumas funcionalidades.
        </p>
        <div class="cookie-buttons">
            <button class="btn-accept" onclick="acceptCookies()">Aceitar Todos</button>
           
            <button class="btn-decline" onclick="declineCookies()">Recusar Todos</button>
        </div>
    </div>
</section>

<!-- Tela de fundo escurecida -->
<div id="overlay" class="overlay"></div>

<!-- CSS -->
<style>
.cookie-banner {
    position: fixed;
    bottom: -100%;
    left: 0;
    width: 100%;
    background: linear-gradient(135deg, #004085, #0062cc);
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

.cookie-title {
    font-size: 22px;
    font-weight: bold;
}

.cookie-text {
    font-size: 18px;
    max-width: 90%;
    margin-bottom: 15px;
}

.cookie-buttons {
    display: flex;
    gap: 15px;
}

.btn-accept, .btn-settings, .btn-decline {
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-accept {
    background-color: #28a745;
    color: white;
}

.btn-accept:hover {
    background-color: #218838;
}

.btn-settings {
    background-color: #ffc107;
    color: black;
}

.btn-settings:hover {
    background-color: #e0a800;
}

.btn-decline {
    background-color: #dc3545;
    color: white;
}

.btn-decline:hover {
    background-color: #c82333;
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
    display: none;
}

@media (max-width: 768px) {
    .cookie-banner {
        padding: 15px;
    }
    .cookie-text {
        font-size: 16px;
    }
    .btn-accept, .btn-settings, .btn-decline {
        font-size: 14px;
        padding: 10px 20px;
    }
}
</style>

<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    if (!localStorage.getItem("cookiesAccepted")) {
        document.getElementById("cookieBanner").style.bottom = "0";
        document.getElementById("overlay").style.display = "block";
    }
});

function acceptCookies() {
    localStorage.setItem("cookiesAccepted", "true");
    closeBanner();
}

function declineCookies() {
    localStorage.setItem("cookiesAccepted", "false");
    closeBanner();
}

function openSettings() {
    alert("Abrindo painel de configurações de cookies...");
}

function closeBanner() {
    document.getElementById("cookieBanner").style.bottom = "-100%";
    document.getElementById("overlay").style.display = "none";
}


</script>
