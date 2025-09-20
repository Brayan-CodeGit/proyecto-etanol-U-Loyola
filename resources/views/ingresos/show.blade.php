<x-app-layout>
   

<h1>Detalle del Ingreso</h1>

<p><strong>Materia Prima:</strong> {{ $ingreso->materiaPrima->nombre }}</p>
<p><strong>Cantidad:</strong> {{ $ingreso->cantidad }}</p>
<p><strong>Fecha:</strong> {{ $ingreso->fecha }}</p>
<p><strong>Proveedor:</strong> {{ $ingreso->proveedor->nombre }}</p>
<p><strong>Usuario:</strong> {{ $ingreso->usuario->nombre }}</p>

<a href="{{ route('ingresos.edit', $ingreso->id) }}">✏️ Editar</a>
<a href="{{ route('ingresos.index') }}">⬅️ Volver al listado</a>

   
</x-app-layout>