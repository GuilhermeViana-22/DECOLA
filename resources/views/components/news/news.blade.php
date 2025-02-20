<section class="newsletter-section">
    <div class="container text-center py-5">
        <div class="newsletter-box shadow-lg p-5 bg-white rounded">
            <h2 class="text-primary">
                <i class="fas fa-newspaper"></i> Assine nossa Newsletter
            </h2>
            <p class="text-muted">Fique por dentro das novidades da Decola de Soft Skills!</p>

            <form action="process.php" method="POST">
                <div class="mb-3 position-relative">
                    <label for="email" class="form-label">Seu e-mail</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                </div>

                <!-- reCAPTCHA centralizado acima do botão -->
                <div class="recaptcha-container">
                    <div class="g-recaptcha" data-sitekey="SUA_CHAVE_DO_SITE"></div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">
                    <i class="fas fa-paper-plane"></i> Enviar
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Script do reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
