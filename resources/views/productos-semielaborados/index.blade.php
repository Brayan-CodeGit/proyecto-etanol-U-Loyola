@extends('layouts.app')

@section('content')
<h1>Productos Semielaborados</h1>

<a href="{{ route('productos-semielaborados.create') }}">➕ Nuevo Producto</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Etapa</th>
            <th>Stock Actual</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->etapa }}</td>
            <td>{{ $producto->stock_actual }}</td>
            <td>{{ $producto->ubicacion }}</td>
            <td>
                <a href="{{ route('productos-semielaborados.show', $producto->id) }}">👁️ Ver</a>
                <a href="{{ route('productos-semielaborados.edit', $producto->id) }}">✏️ Editar</a>
                <form action="{{ route('productos-semielaborados.destroy', $producto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️ Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection