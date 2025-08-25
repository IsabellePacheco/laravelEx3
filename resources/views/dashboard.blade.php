<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #fff0f6; }
        .navbar-rosa { background: #ff4d94; }
        .card {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(255, 77, 148, .2);
            background: #ffffff;
        }
        .btn-rosa { background-color: #ff4d94; color: #fff; }
        .btn-rosa:hover { background-color: #e60073; color: #fff; }
        .btn-outline-rosa { border: 2px solid #ff4d94; color: #ff4d94; background: transparent; }
        .btn-outline-rosa:hover { background: #ff4d94; color: #fff; }
    </style>
</head>
<body>
    

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card p-4 text-center">
                    <h1 class="fw-semibold mb-2">Você está logado(a),</h1>
                    <h2 class="mb-3" style="color:#ff4d94;">{{ auth()->user()->name }}!</h2>
                    <p class="text-muted mb-4">Aproveite sua sessão.</p>

                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-rosa mb-3">Sair</button>
                        <a href="{{ route('users.index') }}" class="btn btn-outline-rosa mb-3">Início</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
