
<section class="newsletter-section" data-anime="right">
    <div class="container text-center py-5">
        <div class="newsletter-box shadow-lg p-5 bg-light rounded border" style="border-color: #002f6c;">
            <p class="text-danger fs-3">
                <i class="fas fa-newspaper"></i> Assine nossa Newsletter
            </p>
            <p class="text-secondary mb-4">
                Fique por dentro das novidades da <strong>Decola de Soft Skills</strong> e tenha acesso a conteúdos exclusivos!
                Não perca as dicas mais atuais sobre desenvolvimento pessoal e profissional.
            </p>

            <form action="{{ route('news') }}" method="POST">
                @csrf <!-- Proteção contra CSRF -->

                <div class="mb-3">
                    <label for="email" class="form-label" style="color: #002f6c;">Seu e-mail</label>
                    <div class="input-group">
                        <span class="input-group-text" style="background-color: #002f6c; color: white;"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control border" name="email" id="email"
                               placeholder="Digite seu e-mail" required aria-label="Digite seu e-mail" style="border-color: #002f6c;">
                    </div>
                </div>

                <!-- reCAPTCHA centralizado -->
                <div class="d-flex justify-content-center mt-3">
                    <div class="g-recaptcha" data-sitekey="SUA_CHAVE_DO_SITE"></div>
                </div>

                <button type="submit" class="btn w-100 mt-4" style="background-color: #002f6c; color: white; transition: all 0.3s ease;">
                    <i class="fas fa-paper-plane"></i> Enviar
                </button>
            </form>
        </div>
    </div>
</section>



<section class="newsletter-section" data-anime="right">
    <div class="container text-center py-5">
        <div class="newsletter-box shadow-lg p-5 bg-white rounded">
            <div class="row">
                <div class="col-12 col-md-6 mb-2">
                    <img src="{{ asset('arquivos/cards/3.png') }}" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <img src="{{ asset('arquivos/cards/2.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Script do reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>





<!-- Script do reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
