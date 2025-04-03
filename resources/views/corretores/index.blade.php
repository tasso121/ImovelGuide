<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Corretores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Cadastro de Corretores</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('corretores.store') }}" method="POST" class="card p-4 mb-4 shadow-sm bg-white">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">CRECI</label>
                <input type="text" name="creci" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <h4>Corretores Cadastrados</h4>

    <table class="table table-striped table-hover mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>CRECI</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($corretores as $corretor)
                <tr>
                    <td>{{ $corretor->id }}</td>
                    <td>{{ $corretor->name }}</td>
                    <td>{{ $corretor->cpf }}</td>
                    <td>{{ $corretor->creci }}</td>
                    <td>
                        <a href="{{ route('corretores.edit', $corretor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('corretores.destroy', $corretor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Deseja realmente excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
