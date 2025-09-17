@extends('layouts.app')

@section('content')
<h1>Nuevo Cliente</h1>

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Contacto:</label>
    <input type="text" name="contacto" required>

    <label>Dirección:</label>
    <input type="text" name="direccion" required>

    <button type="submit">Guardar</button>
</form>
@endsection