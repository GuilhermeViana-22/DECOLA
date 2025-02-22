<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Portal do Franqueado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            max-width: 700px;
            width: 100%;
            min-height: 750px;
            background: #ffffff;
            padding: 2rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .btn-wizard {
            background-color: #0056b3;
            color: white;
            transition: 0.3s;
        }
        .btn-wizard:hover {
            background-color: #003d80;
        }
        .input-group-text {
            background-color: #e9ecef;
            border-right: 0;
        }
        .form-control {
            border-left: 0;
        }
    </style>
</head>
<body>
    <div class="register-container text-center">
        <img src="{{ asset('arquivos/logos/1.png') }}" width="40%" alt="Logo Decola">
        <h3 class="mt-3">Crie sua conta</h3>
        <p class="text-muted">Preencha todos os campos para se cadastrar</p>

        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-outline-danger me-2"><i class="fab fa-google"></i> Google</button>
            <button class="btn btn-outline-primary"><i class="fab fa-facebook"></i> Facebook</button>
        </div>

        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                        <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="E-mail Principal" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        <input type="tel" class="form-control" name="telefone" placeholder="Telefone Principal" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="confirmar_senha" placeholder="Confirmar Senha" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-wizard w-100">Registrar</button>
        </form>

        <div class="mt-3 text-center">
            <a href="{{ route('.login') }}" class="text-primary">Já tem uma conta? Faça login</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.register-container').css({ 'opacity': '1', 'transform': 'translateY(0)' });
        });
    </script>
</body>
</html>
