<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            background-color: #fff5f7; /* fundo branco rosado */
        }
        .card {
            border-radius: 15px;
        }
        h2 {
            color: #ff4d79;
            font-weight: bold;
        }
        .form-control {
            border: 2px solid #ff4d79; /* borda rosa */
            border-radius: px;
        }
        .btn-primary {
            background-color: #ff4d79;
            border-color: #ff4d79;
            font-weight: bold;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background-color: #e63963;
            border-color: #e63963;
        }
        .btn-outline-primary {
            color: #ff4d79;
            border-color: #ff4d79;
            font-weight: bold;
            border-radius: 10px;
        }
        .btn-outline-primary:hover {
            background-color: #ff4d79;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 350px; background-color: #fff;">
        <h2 class="text-center mb-3">Login</h2>

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
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-outline-primary w-100 mb-3">Entrar</button>
            <a href="{{ route('users.index') }}" class="btn btn-outline-primary w-100">Início</a>
        </form>
    </div>
</div>
</body>
</html>
