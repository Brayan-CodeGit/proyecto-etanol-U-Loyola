@extends('layouts.app')

@section('content')
<h1>Editar Traspaso</h1>

<form action="{{ route('traspasos.update', $traspaso->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Producto Semielaborado:</label>
    <select name="producto_semielaborado_id" required>
        @foreach($productos as $producto)
            <option value="{{ $producto->id }}" {{ $producto->id == $traspaso->producto_semielaborado_id ? 'selected' : '' }}>
                {{ $producto->nombre }}
            </option>
        @endforeach
    </select>

    <label>Etapa Origen:</label>
    <select name="etapa_origen" required>
        <option value="Hidrólisis" {{ $traspaso->etapa_origen == 'Hidrólisis' ? 'selected' : '' }}>Hidrólisis</option>
        <option value="Fermentación" {{ $traspaso->etapa_origen == 'Fermentación' ? 'selected' : '' }}>Fermentación</option>
        <option value="Destilación" {{ $traspaso->etapa_origen == 'Destilación' ? 'selected' : '' }}>Destilación</option>
    </select>

    <label>Etapa Destino:</label>
    <select name="etapa_destino" required>
        <option value="Hidrólisis" {{ $traspaso->etapa_destino == 'Hidrólisis' ? 'selected' : '' }}>Hidrólisis</option>
        <option value="Fermentación" {{ $traspaso->etapa_destino == 'Fermentación' ? 'selected' : '' }}>Fermentación</option>
        <option value="Destilación" {{ $traspaso->etapa_destino == 'Destilación' ? 'selected' : '' }}>Destilación</option>
    </select>

    <label>Cantidad:</label>
    <input type="number" step="0.01" name="cantidad" value="{{ $traspaso->cantidad }}" required>

    <label>Fecha:</label>
    <input type="date" name="fecha" value="{{ $traspaso->fecha }}" required>

    <label>Usuario:</label>
    <select name="usuario_id" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" {{ $usuario->id == $traspaso->usuario_id ? 'selected' : '' }}>
                {{ $usuario->nombre }}
            </option>
        @endforeach
    </select>

    <button type="submit">Actualizar</button>
</form>
@endsection