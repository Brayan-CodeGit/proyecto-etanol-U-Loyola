@extends('layouts.app')

@section('content')
<h1>Detalle del Producto Semielaborado</h1>

<p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
<p><strong>Etapa:</strong> {{ $producto->etapa }}</p>
<p><strong>Stock Actual:</strong> {{ $producto->stock_actual }}</p>
<p><strong>Ubicación:</strong> {{ $producto->ubicacion }}</p>

<a href="{{ route('productos-semielaborados.edit', $producto->id) }}">✏️ Editar</a>
<a href="{{ route('productos-semielaborados.index') }}">⬅️ Volver al listado</a>
@endsection