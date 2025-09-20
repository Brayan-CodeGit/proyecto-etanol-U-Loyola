<x-app-layout>

<h1>Nuevo Producto Semielaborado</h1>

<form action="{{ route('productos-semielaborados.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Etapa:</label>
    <select name="etapa" required>
        <option value="Hidrólisis">Hidrólisis</option>
        <option value="Fermentación">Fermentación</option>
        <option value="Destilación">Destilación</option>
    </select>

    <label>Stock Actual:</label>
    <input type="number" step="0.01" name="stock_actual" required>

    <label>Ubicación:</label>
    <input type="text" name="ubicacion" required>

    <button type="submit">Guardar</button>
</form>

</x-app-layout>