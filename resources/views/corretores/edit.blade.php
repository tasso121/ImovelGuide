<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Corretor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Editar Corretor</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('corretores.update', $corretor->id) }}" method="POST" class="card p-4 shadow-sm bg-white">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Nome</label>
                <input type="text" name="name" value="{{ $corretor->name }}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" value="{{ $corretor->cpf }}" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">CRECI</label>
                <input type="text" name="creci" value="{{ $corretor->creci }}" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('corretores.index') }}" class="btn btn-secondary ms-2">Voltar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
