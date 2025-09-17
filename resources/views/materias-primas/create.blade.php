@extends('layouts.app')

@section('content')
<h1>Nueva Materia Prima</h1>

<form action="{{ route('materias-primas.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Unidad de Medida:</label>
    <input type="text" name="unidad_medida" required>

    <label>Stock Actual:</label>
    <input type="number" step="0.01" name="stock_actual" required>

    <label>Ubicación:</label>
    <input type="text" name="ubicacion" required>

    <button type="submit">Guardar</button>
</form>
@endsection