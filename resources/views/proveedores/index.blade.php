@extends('layouts.app')

@section('content')
<h1>Proveedores</h1>

<a href="{{ route('proveedores.create') }}">➕ Nuevo Proveedor</a>

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
        @foreach($proveedores as $proveedor)
        <tr>
            <td>{{ $proveedor->id }}</td>
            <td>{{ $proveedor->nombre }}</td>
            <td>{{ $proveedor->contacto }}</td>
            <td>{{ $proveedor->direccion }}</td>
            <td>
                <a href="{{ route('proveedores.show', $proveedor->id) }}">👁️ Ver</a>
                <a href="{{ route('proveedores.edit', $proveedor->id) }}">✏️ Editar</a>
                <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
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