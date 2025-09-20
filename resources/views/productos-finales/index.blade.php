<x-app-layout>

<h1>Productos Finales</h1>

<a href="{{ route('productos-finales.create') }}">➕ Nuevo Producto Final</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Stock Actual</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->stock_actual }}</td>
            <td>{{ $producto->ubicacion }}</td>
            <td>
                <a href="{{ route('productos-finales.show', $producto->id) }}">👁️ Ver</a>
                <a href="{{ route('productos-finales.edit', $producto->id) }}">✏️ Editar</a>
                <form action="{{ route('productos-finales.destroy', $producto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️ Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

   
</x-app-layout>