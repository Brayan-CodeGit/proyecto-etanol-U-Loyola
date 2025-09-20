<x-app-layout>
    

<h1>Editar Ingreso</h1>

<form action="{{ route('ingresos.update', $ingreso->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Materia Prima:</label>
    <select name="materia_prima_id" required>
        @foreach($materias as $materia)
            <option value="{{ $materia->id }}" {{ $materia->id == $ingreso->materia_prima_id ? 'selected' : '' }}>
                {{ $materia->nombre }}
            </option>
        @endforeach
    </select>

    <label>Cantidad:</label>
    <input type="number" step="0.01" name="cantidad" value="{{ $ingreso->cantidad }}" required>

    <label>Fecha:</label>
    <input type="date" name="fecha" value="{{ $ingreso->fecha }}" required>

    <label>Proveedor:</label>
    <select name="proveedor_id" required>
        @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}" {{ $proveedor->id == $ingreso->proveedor_id ? 'selected' : '' }}>
                {{ $proveedor->nombre }}
            </option>
        @endforeach
    </select>

    <label>Usuario:</label>
    <select name="usuario_id" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" {{ $usuario->id == $ingreso->usuario_id ? 'selected' : '' }}>
                {{ $usuario->nombre }}
            </option>
        @endforeach
    </select>

    <button type="submit">Actualizar</button>
</form>

    
</x-app-layout>