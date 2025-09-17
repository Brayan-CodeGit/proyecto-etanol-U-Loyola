@extends('layouts.app')

@section('content')
<h1>Editar Proveedor</h1>

<form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $proveedor->nombre }}" required>

    <label>Contacto:</label>
    <input type="text" name="contacto" value="{{ $proveedor->contacto }}" required>

    <label>Dirección:</label>
    <input type="text" name="direccion" value="{{ $proveedor->direccion }}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection