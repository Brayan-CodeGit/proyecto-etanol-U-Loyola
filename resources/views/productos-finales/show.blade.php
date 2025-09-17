@extends('layouts.app')

@section('content')
<h1>Detalle del Producto Final</h1>

<p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
<p><strong>Stock Actual:</strong> {{ $producto->stock_actual }}</p>
<p><strong>Ubicación:</strong> {{ $producto->ubicacion }}</p>

<a href="{{ route('productos-finales.edit', $producto->id) }}">✏️ Editar</a>
<a href="{{ route('productos-finales.index') }}">⬅️ Volver al listado</a>
@endsection