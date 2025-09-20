<x-app-layout>
   

<h1>Materias Primas</h1>

<a href="{{ route('materias-primas.create') }}">➕ Nueva Materia Prima</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Unidad de Medida</th>
            <th>Stock Actual</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($materias as $materia)
        <tr>
            <td>{{ $materia->id }}</td>
            <td>{{ $materia->nombre }}</td>
            <td>{{ $materia->unidad_medida }}</td>
            <td>{{ $materia->stock_actual }}</td>
            <td>{{ $materia->ubicacion }}</td>
            <td>
                <a href="{{ route('materias-primas.show', $materia->id) }}">👁️ Ver</a>
                <a href="{{ route('materias-primas.edit', $materia->id) }}">✏️ Editar</a>
                <form action="{{ route('materias-primas.destroy', $materia->id) }}" method="POST" style="display:inline;">
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