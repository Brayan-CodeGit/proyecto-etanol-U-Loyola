@extends('layouts.app')

@section('content')
<h1>Editar Cliente</h1>

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $cliente->nombre }}" required>

    <label>Contacto:</label>
    <input type="text" name="contacto" value="{{ $cliente->contacto }}" required>

    <label>Dirección:</label>
    <input type="text" name="direccion" value="{{ $cliente->direccion }}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection