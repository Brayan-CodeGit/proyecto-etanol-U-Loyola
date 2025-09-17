@extends('layouts.app')

@section('content')
<h1>Detalle de Materia Prima</h1>

<p><strong>Nombre:</strong> {{ $materia->nombre }}</p>
<p><strong>Unidad de Medida:</strong> {{ $materia->unidad_medida }}</p>
<p><strong>Stock Actual:</strong> {{ $materia->stock_actual }}</p>
<p><strong>Ubicación:</strong> {{ $materia->ubicacion }}</p>

<a href="{{ route('materias-primas.edit', $materia->id) }}">✏️ Editar</a>
<a href="{{ route('materias-primas.index') }}">⬅️ Volver al listado</a>
@endsection