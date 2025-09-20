<x-app-layout>
   

<h1>Traspasos de Producto Semielaborado</h1>

<a href="{{ route('traspasos.create') }}">➕ Nuevo Traspaso</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Etapa Origen</th>
            <th>Etapa Destino</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($traspasos as $traspaso)
        <tr>
            <td>{{ $traspaso->id }}</td>
            <td>{{ $traspaso->productoSemielaborado->nombre }}</td>
            <td>{{ $traspaso->etapa_origen }}</td>
            <td>{{ $traspaso->etapa_destino }}</td>
            <td>{{ $traspaso->cantidad }}</td>
            <td>{{ $traspaso->fecha }}</td>
            <td>{{ $traspaso->usuario->nombre }}</td>
            <td>
                <a href="{{ route('traspasos.show', $traspaso->id) }}">👁️ Ver</a>
                <a href="{{ route('traspasos.edit', $traspaso->id) }}">✏️ Editar</a>
                <form action="{{ route('traspasos.destroy', $traspaso->id) }}" method="POST" style="display:inline;">
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