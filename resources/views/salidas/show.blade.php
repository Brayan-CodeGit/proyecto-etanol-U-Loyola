<x-app-layout>

<h1>Detalle de la Salida</h1>

<p><strong>Producto:</strong> {{ $salida->productoFinal->nombre }}</p>
<p><strong>Cantidad:</strong> {{ $salida->cantidad }}</p>
<p><strong>Fecha:</strong> {{ $salida->fecha }}</p>
<p><strong>Cliente:</strong> {{ $salida->cliente->nombre }}</p>
<p><strong>Usuario:</strong> {{ $salida->usuario->nombre }}</p>

<a href="{{ route('salidas.edit', $salida->id) }}">✏️ Editar</a>
<a href="{{ route('salidas.index') }}">⬅️ Volver al listado</a><x-app-layout>
   
</x-app-layout>