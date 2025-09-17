@extends('layouts.app')

@section('content')
<h1>Editar Materia Prima</h1>

<form action="{{ route('materias-primas.update', $materia->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $materia->nombre }}" required>

    <label>Unidad de Medida:</label>
    <input type="text" name="unidad_medida" value="{{ $materia->unidad_medida }}" required>

    <label>Stock Actual:</label>
    <input type="number" step="0.01" name="stock_actual" value="{{ $materia->stock_actual }}" required>

    <label>Ubicación:</label>
    <input type="text" name="ubicacion" value="{{ $materia->ubicacion }}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection