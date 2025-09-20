<x-app-layout>

<h1>Editar Producto Semielaborado</h1>

<form action="{{ route('productos-semielaborados.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}" required>

    <label>Etapa:</label>
    <select name="etapa" required>
        <option value="Hidrólisis" {{ $producto->etapa == 'Hidrólisis' ? 'selected' : '' }}>Hidrólisis</option>
        <option value="Fermentación" {{ $producto->etapa == 'Fermentación' ? 'selected' : '' }}>Fermentación</option>
        <option value="Destilación" {{ $producto->etapa == 'Destilación' ? 'selected' : '' }}>Destilación</option>
    </select>

    <label>Stock Actual:</label>
    <input type="number" step="0.01" name="stock_actual" value="{{ $producto->stock_actual }}" required>

    <label>Ubicación:</label>
    <input type="text" name="ubicacion" value="{{ $producto->ubicacion }}" required>

    <button type="submit">Actualizar</button>
</form>
   
</x-app-layout>