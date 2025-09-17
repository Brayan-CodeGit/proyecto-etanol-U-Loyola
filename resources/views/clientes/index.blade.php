@extends('layouts.app')

@section('content')
<h1>Clientes</h1>

<a href="{{ route('clientes.create') }}">➕ Nuevo Cliente</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Contacto</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->contacto }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>
                <a href="{{ route('clientes.show', $cliente->id) }}">👁️ Ver</a>
                <a href="{{ route('clientes.edit', $cliente->id) }}">✏️ Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
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