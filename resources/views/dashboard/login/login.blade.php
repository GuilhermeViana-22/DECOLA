<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal do Franqueado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            min-height: 600px;
            background: #ffffff;
            padding: 2rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            text-align: center;
        }
        .btn-wizard {
            background-color: #0056b3;
            color: white;
            transition: 0.3s;
        }
        .btn-wizard:hover {
            background-color: #003d80;
        }
        .input-group-prepend .fa {
            font-size: 18px;
        }
        .input-group-text {
            background-color: #f7f7f7;
            border-right: none;
        }
        .form-control {
            border-left: none;
            border-radius: 0 4px 4px 0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('arquivos/logos/1.png') }}" width="40%" alt="Logo Decola">
        <h3 class="mt-3">Acesse sua conta</h3>
        <p class="text-muted">Esta é a rota de login para o portal do franqueado</p>

        <button class="btn btn-primary w-100 mb-2"><i class="fab fa-facebook-f"></i> Entrar com Facebook</button>
        <button class="btn btn-danger w-100 mb-3"><i class="fab fa-google"></i> Entrar com Google</button>

        <form action="" method="POST">
            @csrf
            <div class="mb-3 input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
            </div>
            <div class="mb-3 input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" name="password" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-wizard w-100">Entrar <i class="fas fa-sign-in-alt"></i></button>
        </form>

        <div class="mt-3">
            <a href="{{ route('.reset') }}" class="text-muted">Esqueceu sua senha?</a>
        </div>

        <div class="mt-3">
            <a href="{{ route('.register') }}" class="text-primary">Não tem uma conta? Cadastre-se</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
