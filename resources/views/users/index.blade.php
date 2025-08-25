<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fff0f6;
        }
        .card {
            background: #ffffff;
        }
        .btn-rosa {
            background-color: #ff4d94;
            color: white;
        }
        .btn-rosa:hover {
            background-color: #e60073;
            color: white;
        }
        .btn-outline-rosa {
            border: 2px solid #ff4d94;
            color: #ff4d94;
        }
        .btn-outline-rosa:hover {
            background-color: #ff4d94;
            color: white;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg border-0 rounded-4 p-5 text-center" style="width: 400px;">
        <h1 class="mb-3 text-rosa">💖 Olá 💖</h1>
        <h2 class="mb-4">Sejam Bem-Vindos!!!</h2>
        <a href="{{ route('login.form') }}" class="btn btn-outline-rosa btn-lg px-4 mb-2">Login</a>
        <a href="{{ route('user.create') }}" class="btn btn-outline-rosa btn-lg px-4 mb-2">Cadastrar</a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>