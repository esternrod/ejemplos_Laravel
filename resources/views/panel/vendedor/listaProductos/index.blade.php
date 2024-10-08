{{-- Extiende de la plantilla de Admin LTE, nos permite tener el panel en la vista --}}
@extends('adminlte::page')

{{-- Titulo en las tabulaciones del Navegador --}}
@section('title', 'Productos')

{{-- Titulo en el contenido de la Pagina --}}
@section('content_header')
    <h1>Lista de Productos</h1>
@stop

{{-- Contenido de la Pagina --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            
            <a href="{{ route('producto.create') }}" class="btn btn-success text-uppercase">
                Nuevo Producto 
            </a>
            <a href="{{ route('producto.reportPDF') }}" class="btn btn-success text-uppercase"> PDF </a> 
            <a class="btn btn-warning float-end"
                href="{{ route('producto.export') }}">Exportar Productos exel </a>
        </div>
        
        @if(session('alert'))
            <div class="col-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('alert') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
            </div>
        @endif

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(count($productos)>0)
                    <table id="tabla-productos" class="table table-striped table-hover w-100">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class="text-uppercase">Categoría</th>
                                <th scope="col" class="text-uppercase">Nombre</th>
                                <th scope="col" class="text-uppercase">Descripción</th>
                                <th scope="col" class="text-uppercase">Imagen</th>
                                <th scope="col" class="text-uppercase">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                             <tr>
                                 <td>{{ $producto->id }}</td>
                                 <td>{{ $producto->categoria->nombre }}</td>
                                 <td>{{ $producto->nombre }}</td>
                                 <td>{{ Str::limit($producto->descripcion, 80) }}</td>
                                 <td>
                                     <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" class="img-fluid" style="width: 150px;">
                                 </td>
                                 <td>
                                     <div class="d-flex">
                                         <a href="{{ route('producto.show', $producto) }}" class="btn btn-sm btn-info text-white text-uppercase me-1">
                                             Ver
                                         </a>
                                         <a href="{{ route('producto.edit', $producto) }}" class="btn btn-sm btn-warning text-white text-uppercase me-1">
                                             Editar
                                         </a>
                                         <form action="{{ route('producto.destroy', $producto) }}" method="POST">
                                             @csrf 
                                             @method('DELETE')
                                             <button type="submit" class="btn btn-sm btn-danger text-uppercase">
                                                 Eliminar
                                             </button>
                                         </form>
                                     </div>
                                 </td>
                             </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else 
                    <div color:red  >No hay elementos disponibles</div>
                @endif

            </div>
        </div>
    </div>
</div>
@stop

{{-- Importacion de Archivos CSS --}}
@section('css')
    
@stop


{{-- Importacion de Archivos JS --}}
@section('js')

@stop