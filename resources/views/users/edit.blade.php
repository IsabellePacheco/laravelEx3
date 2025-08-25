<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #fff0f6; }
        .btn-rosa { background: #ff4d94; color: white; }
        .btn-rosa:hover { background: #e60073; color: white; }
        .btn-outline-rosa { border: 2px solid #ff4d94; color: #ff4d94; }
        .btn-outline-rosa:hover { background: #ff4d94; color: white; }
        input[type="email"] { border: 2px solid #ff4d94 !important; box-shadow: none !important; }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4 shadow-lg rounded-4" style="width: 350px;">
        <h2 class="text-center mb-3">💖 Recuperar Senha 💖</h2>
        <p class="text-muted text-center">Digite seu e-mail para receber o link de redefinição.</p>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>
            <button type="submit" class="btn btn-rosa w-100 mb-2">Enviar Link</button>
            <a href="{{ route('login.form') }}" class="btn btn-outline-rosa w-100">Voltar</a>
        </form>
    </div>
</body>
</html>
