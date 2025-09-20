<x-app-layout>

<h1>Nuevo Proveedor</h1>

<form action="{{ route('proveedores.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Contacto:</label>
    <input type="text" name="contacto" required>

    <label>Dirección:</label>
    <input type="text" name="direccion" required>

    <button type="submit">Guardar</button>
</form>

   
</x-app-layout>