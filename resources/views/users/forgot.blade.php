<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{background:#fff0f6;}
        input{border:2px solid #ff4d94 !important;}
        .btn-rosa{background:#ff4d94;color:white;}
        .btn-rosa:hover{background:#e60073;color:white;}
        .btn-outline-rosa{border:2px solid #ff4d94;color:#ff4d94;}
        .btn-outline-rosa:hover{background:#ff4d94;color:white;}
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4 rounded-4" style="width: 350px;">
        <h2 class="text-center mb-3">💖 Recuperar Senha 💖</h2>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-rosa w-100">Enviar Link</button>
        </form>
        <a href="{{ route('login.form') }}" class="btn btn-outline-rosa w-100 mt-2">Voltar</a>
    </div>
</body>
</html>
