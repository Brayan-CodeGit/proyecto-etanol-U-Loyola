@extends('layouts.app')

@section('content')
<h1>Nuevo Usuario</h1>

<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Correo:</label>
    <input type="email" name="correo" required>

    <label>Contraseña:</label>
    <input type="password" name="contraseña" required>

    <label>Rol:</label>
    <select name="rol" required>
        <option value="Administrador">Administrador</option>
        <option value="Operador">Operador</option>
        <option value="Supervisor">Supervisor</option>
    </select>

    <button type="submit">Guardar</button>
</form>
@endsection