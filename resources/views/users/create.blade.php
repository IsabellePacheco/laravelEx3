<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
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
        input[type="text"] {
            border: 2px solid #ff4d94 !important;
            box-shadow: none !important;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg border-0 rounded-4 p-5 text-center" style="width: 400px;">
        <h1 class="mb-3 text-rosa">💖 Cadastro 💖</h1>
        

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('users-store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome:</label>
                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail:</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Senha:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-outline-rosa mb-3">Cadastrar</button>
            <a href="{{ route('users.index') }}" class="btn btn-outline-rosa mb-3">Voltar</a>
        </form>
    </div>
</body>
</html>
