@extends('layouts.app')

@section('content')
<h1>Salidas de Producto</h1>

<a href="{{ route('salidas.create') }}">➕ Nueva Salida</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($salidas as $salida)
        <tr>
            <td>{{ $salida->id }}</td>
            <td>{{ $salida->productoFinal->nombre }}</td>
            <td>{{ $salida->cantidad }}</td>
            <td>{{ $salida->fecha }}</td>
            <td>{{ $salida->cliente->nombre }}</td>
            <td>{{ $salida->usuario->nombre }}</td>
            <td>
                <a href="{{ route('salidas.show', $salida->id) }}">👁️ Ver</a>
                <a href="{{ route('salidas.edit', $salida->id) }}">✏️ Editar</a>
                <form action="{{ route('salidas.destroy', $salida->id) }}" method="POST" style="display:inline;">
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