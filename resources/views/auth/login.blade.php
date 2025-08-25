<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #fff0f6; }
        .btn-rosa { background: #ff4d94; color: white; }
        .btn-rosa:hover { background: #e60073; color: white; }
        .btn-outline-rosa { border: 2px solid #ff4d94; color: #ff4d94; }
        .btn-outline-rosa:hover { background: #ff4d94; color: white; }
        
           input[type="email"] {
            border: 2px solid #ff4d94 !important;
            box-shadow: none !important;
           }
           input[type="password"] {
            border: 2px solid #ff4d94 !important;
            box-shadow: none !important;
           }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg border-0 rounded-4 p-5 text-center" style="width: 400px;;">
        <h2 class="text-center mb-3">💖 Login 💖</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">E-mail:</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Senha:</label>
                <input type="password" name="password" class="form-control btn-outline-rosa2 " required>
            </div>
            <button type="submit" class="btn  btn-outline-rosa mb-3">Entrar</button>
            <a href="{{ route('user.index') }}" class="btn btn-outline-rosa mb-3">Voltar</a>
        </form>
    </div>
</body>
</html>
