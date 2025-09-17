@extends('layouts.app')

@section('content')
<h1>Editar Usuario</h1>

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>

    <label>Correo:</label>
    <input type="email" name="correo" value="{{ $usuario->correo }}" required>

    <label>Contraseña (opcional):</label>
    <input type="password" name="contraseña">

    <label>Rol:</label>
    <select name="rol" required>
        <option value="Administrador" {{ $usuario->rol == 'Administrador' ? 'selected' : '' }}>Administrador</option>
        <option value="Operador" {{ $usuario->rol == 'Operador' ? 'selected' : '' }}>Operador</option>
        <option value="Supervisor" {{ $usuario->rol == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
    </select>

    <button type="submit">Actualizar</button>
</form>
@endsection