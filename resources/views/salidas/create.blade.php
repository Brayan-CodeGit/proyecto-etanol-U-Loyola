<x-app-layout>
   


<h1>Nueva Salida</h1>

<form action="{{ route('salidas.store') }}" method="POST">
    @csrf

    <label>Producto Final:</label>
    <select name="producto_final_id" required>
        @foreach($productos as $producto)
            <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
        @endforeach
    </select>

    <label>Cantidad:</label>
    <input type="number" step="0.01" name="cantidad" required>

    <label>Fecha:</label>
    <input type="date" name="fecha" required>

    <label>Cliente:</label>
    <select name="cliente_id" required>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
        @endforeach
    </select>

    <label>Usuario:</label>
    <select name="usuario_id" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>

</x-app-layout>