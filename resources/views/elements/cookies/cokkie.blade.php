<!-- Banner de Cookies - Decola School -->
<section id="cookieBanner" class="cookie-banner banner">
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

    function closeBanner() {
        document.getElementById("cookieBanner").style.bottom = "-100%";
        document.getElementById("overlay").style.display = "none";
    }
    </script>
