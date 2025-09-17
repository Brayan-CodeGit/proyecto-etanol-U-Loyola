@extends('layouts.app')

@section('content')
<h1>Usuarios del Sistema</h1>

<a href="{{ route('usuarios.create') }}">➕ Nuevo Usuario</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->correo }}</td>
            <td>{{ $usuario->rol }}</td>
            <td>
                <a href="{{ route('usuarios.show', $usuario->id) }}">👁️ Ver</a>
                <a href="{{ route('usuarios.edit', $usuario->id) }}">✏️ Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
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