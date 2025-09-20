<x-app-layout>
   

<h1>Nuevo Traspaso</h1>

<form action="{{ route('traspasos.store') }}" method="POST">
    @csrf

    <label>Producto Semielaborado:</label>
    <select name="producto_semielaborado_id" required>
        @foreach($productos as $producto)
            <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
        @endforeach
    </select>

    <label>Etapa Origen:</label>
    <select name="etapa_origen" required>
        <option value="Hidrólisis">Hidrólisis</option>
        <option value="Fermentación">Fermentación</option>
        <option value="Destilación">Destilación</option>
    </select>

    <label>Etapa Destino:</label>
    <select name="etapa_destino" required>
        <option value="Hidrólisis">Hidrólisis</option>
        <option value="Fermentación">Fermentación</option>
        <option value="Destilación">Destilación</option>
    </select>

    <label>Cantidad:</label>
    <input type="number" step="0.01" name="cantidad" required>

    <label>Fecha:</label>
    <input type="date" name="fecha" required>

    <label>Usuario:</label>
    <select name="usuario_id" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>

</x-app-layout>