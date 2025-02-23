<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $data['subject'] }}</title>
</head>
<body style="color: #000000; font-family: Arial, sans-serif; text-align: center; padding: 50px 0; margin: 0;">

    <div style="max-width: 600px; background: #fff; color: #000; margin: auto; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
        <div style="background: #00345e; color: #fff; padding: 15px; border-radius: 10px 10px 0 0;">
            <img src="{{ asset('arquivos/logos/1.png') }}" alt="Logo" style="width: 20%;">
        </div>
        <div style="padding: 20px; font-size: 18px; line-height: 1.6;">
            <h2 style="color: #00345e;">🎉 Inscrição Confirmada!</h2>
            <p>{{ $data['body'] }}</p>
        </div>
        <div style="margin-top: 20px; font-size: 14px; color: #555;">
            <small>Fique ligado! Em breve, você receberá novidades.</small>
        </div>
    </div>
</body>
</html>
