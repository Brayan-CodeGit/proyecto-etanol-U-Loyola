<x-app-layout>
    


<h1>Nuevo Ingreso</h1>

<form action="{{ route('ingresos.store') }}" method="POST">
    @csrf

    <label>Materia Prima:</label>
    <select name="materia_prima_id" required>
        @foreach($materias as $materia)
            <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
        @endforeach
    </select>

    <label>Cantidad:</label>
    <input type="number" step="0.01" name="cantidad" required>

    <label>Fecha:</label>
    <input type="date" name="fecha" required>

    <label>Proveedor:</label>
    <select name="proveedor_id" required>
        @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
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