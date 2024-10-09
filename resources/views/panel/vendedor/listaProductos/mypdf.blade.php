<!DOCTYPE html>
<html>
<head>
 <title>Generate Pdf</title>
</head>
<body>
 <h1>{{ $heading}}</h1>
 <div>
 

 <table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>precio</th>
    </tr>
    @foreach ($content as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio}}</td>
        </tr>
    @endforeach
 </table>

 </div>
</body>
</html>

