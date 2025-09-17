@extends('layouts.app')

@section('content')
<h1>Editar Salida</h1>

<form action="{{ route('salidas.update', $salida->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Producto Final:</label>
    <select name="producto_final_id" required>
        @foreach($productos as $producto)
            <option value="{{ $producto->id }}" {{ $producto->id == $salida->producto_final_id ? 'selected' : '' }}>
                {{ $producto->nombre }}
            </option>
        @endforeach
    </select>

    <label>Cantidad:</label>
    <input type="number" step="0.01" name="cantidad" value="{{ $salida->cantidad }}" required>

    <label>Fecha:</label>
    <input type="date" name="fecha" value="{{ $salida->fecha }}" required>

    <label>Cliente:</label>
    <select name="cliente_id" required>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ $cliente->id == $salida->cliente_id ? 'selected' : '' }}>
                {{ $cliente->nombre }}
            </option>
        @endforeach
    </select>

    <label>Usuario:</label>
    <select name="usuario_id" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" {{ $usuario->id == $salida->usuario_id ? 'selected' : '' }}>
                {{ $usuario->nombre }}
            </option>
        @endforeach
    </select>

    <button type="submit">Actualizar</button>
</form>
@endsection