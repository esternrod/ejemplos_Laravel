{{-- Contenido de la Pagina --}}
@section('content')
<!DOCTYPE html>
<html>
<head>
 <title>Generate Pdf</title>
</head>
<body>
 <h1>{{ $heading}}</h1>
 <div>
 <p>{{$content}}</p>
 </div>
</body>
</html>

@stop

{{-- Importacion de Archivos CSS --}}
@section('css')
    
@stop


{{-- Importacion de Archivos JS --}}
@section('js')

@stop