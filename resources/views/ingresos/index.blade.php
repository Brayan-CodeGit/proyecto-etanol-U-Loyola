<x-app-layout>
   


<h1>Ingresos</h1>

<a href="{{ route('ingresos.create') }}">➕ Nuevo Ingreso</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Materia Prima</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Proveedor</th>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ingresos as $ingreso)
        <tr>
            <td>{{ $ingreso->id }}</td>
            <td>{{ $ingreso->materiaPrima->nombre }}</td>
            <td>{{ $ingreso->cantidad }}</td>
            <td>{{ $ingreso->fecha }}</td>
            <td>{{ $ingreso->proveedor->nombre }}</td>
            <td>{{ $ingreso->usuario->nombre }}</td>
            <td>
                <a href="{{ route('ingresos.show', $ingreso->id) }}">👁️ Ver</a>
                <a href="{{ route('ingresos.edit', $ingreso->id) }}">✏️ Editar</a>
                <form action="{{ route('ingresos.destroy', $ingreso->id) }}" method="POST" style="display:inline;">
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