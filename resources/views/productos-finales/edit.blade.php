@extends('layouts.app')

@section('content')
<h1>Editar Producto Final</h1>

<form action="{{ route('productos-finales.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}" required>

    <label>Stock Actual:</label>
    <input type="number" step="0.01" name="stock_actual" value="{{ $producto->stock_actual }}" required>

    <label>Ubicación:</label>
    <input type="text" name="ubicacion" value="{{ $producto->ubicacion }}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection