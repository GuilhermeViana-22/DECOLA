<style>
    .is-invalid {
        border-color: red;
        background-color: #f8d7da;
    }

    .is-invalid + small {
        color: red;
        font-size: 0.875rem;
    }
</style>

<div class="banner py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto Motivacional (Esquerda) -->
            <div class="col-12 col-md-6 text-center text-md-left mb-4 mb-md-0">
                <h2 class="banner-title">Acredite no seu potencial, o futuro começa hoje!</h2>
                <p class="banner-text">
                    Junte-se a nós e transforme seus sonhos em realidade. A Decola oferece as ferramentas para você alcançar todo o seu potencial. Prepare-se para o sucesso!
                </p>
            </div>

            <!-- Formulário (Direita) -->
            <div class="col-12 col-md-6">
                <div class="banner-form p-4 border rounded shadow-sm" id="form-step-1">
                    <h4 class="form-title text-center mb-4">Preencha para saber mais</h4>
                    <form id="form1">

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="name" placeholder="Digite seu nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Digite seu telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Escreva uma mensagem" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="interest" class="form-label">Área de Interesse</label>
                            <select class="form-select" id="interest" required>
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="soft-skills">Soft Skills</option>
                                <option value="leadership">Liderança</option>
                                <option value="teamwork">Trabalho em Equipe</option>
                            </select>
                        </div>
                        <button type="button" id="next-btn" class="btn btn-danger w-100">Próximo</button>
                    </form>
                </div>

                <!-- Segundo Formulário -->
                <div class="banner-form p-4 border rounded shadow-sm d-none" id="form-step-2">
                    <h4 class="form-title text-center mb-4">Mais algumas informações</h4>
                    <form id="form2">
                        <div class="mb-3">
                            <label class="form-label">Para quem é o curso?</label>
                            <select class="form-select" name="course_for" required>
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="para-mim">Para mim</option>
                                <option value="meu-filho">Para meu filho(a)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="age-group" class="form-label">Qual a faixa etária?</label>
                            <select class="form-select" id="age-group" required>
                                <option value="" disabled selected>Escolha uma faixa etária</option>
                                <option value="3-4">Entre 3 e 4 anos</option>
                                <option value="5-6">Entre 5 e 6 anos</option>
                                <option value="7-8">Entre 7 e 8 anos</option>
                                <option value="9-10">Entre 9 e 10 anos</option>
                                <option value="11-12">Entre 11 e 12 anos</option>
                                <option value="13-17">Entre 13 e 17 anos</option>
                                <option value="18-25">Entre 18 e 25 anos</option>
                                <option value="25+">Acima de 25 anos</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Em qual nível deseja iniciar?</label>
                            <select class="form-select" id="level" required>
                                <option value="" disabled selected>Escolha o nível</option>
                                <option value="kids">Kids</option>
                                <option value="teen">Teen</option>
                                <option value="adult">Adulto</option>
                                <option value="business">Empresarial</option>
                            </select>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="info-check" required>
                            <label class="form-check-label" for="info-check">Receber informações</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="terms-check" required>
                            <label class="form-check-label" for="terms-check">Li e aceito os <a href="#" target="_blank">termos e condições</a></label>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<span><a target="_blank" href="https://api.whatsapp.com/send?phone=5511963245178" id="whatsapp-button"><i id="whatsapp" class="fab fa-whatsapp animate__animated animate__jello"></i></a></span>

<script>
    // Função para validar se todos os campos do formulário estão preenchidos
    function isFormValid(formId) {
        let isValid = true;
        $(`#${formId} input, #${formId} select, #${formId} textarea`).each(function() {
            if ($(this).prop('required') && !$(this).val()) {
                isValid = false;
                return false;
            }
        });
        return isValid;
    }

    // Evento de clique no botão "Próximo"
    $('#next-btn').on('click', function() {
        $('#form-step-1').addClass('d-none');
        $('#form-step-2').removeClass('d-none');
    });

    // Enviar o segundo formulário via AJAX
    $('#form2').on('submit', function(e) {
        e.preventDefault();

        if (isFormValid('form2')) {
            const formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                message: $('#message').val(),
                interest: $('#interest').val(),
                course_for: $('select[name="course_for"]').val(),
                age_group: $('#age-group').val(),
                level: $('#level').val(),
                info_check: $('#info-check').prop('checked'),
                terms_check: $('#terms-check').prop('checked'),
            };
// Obter o CSRF token do meta tag
const csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '{{ route('web.enviarFormulario') }}',
                method: 'POST',
                data: formData,
                headers: {
            'X-CSRF-TOKEN': csrfToken // Enviar o token CSRF no cabeçalho
        },
                success: function(response) {
                    alert('Formulário enviado com sucesso!');
                },
                error: function(xhr, status, error) {
                    alert('Houve um erro ao enviar o formulário. Tente novamente.');
                }
            });
        } else {
            alert('Por favor, preencha todos os campos obrigatórios.');
        }
    });

    // Máscara para telefone
    $('#phone').on('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 10) {
            value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
        } else {
            value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
        }
        e.target.value = value;
    });
</script>
