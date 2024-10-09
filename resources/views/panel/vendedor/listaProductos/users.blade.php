<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Usuarios</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card bg-light mt-3">
        <div class="card-header">Laravel Export Excel</div>
        <div class="card-body">
            <table class="table table-bordered mt-3">
            <tr><th colspan="3">Listado De Usuarios
                <a class="btn btn-warning float-end"
                href="{{ route('users.export') }}">Exportar Datos de Usuarios</a></th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>