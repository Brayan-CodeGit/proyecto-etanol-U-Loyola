<x-app-layout>
   
<h1>Detalle del Traspaso</h1>

<p><strong>Producto:</strong> {{ $traspaso->productoSemielaborado->nombre }}</p>
<p><strong>Etapa Origen:</strong> {{ $traspaso->etapa_origen }}</p>
<p><strong>Etapa Destino:</strong> {{ $traspaso->etapa_destino }}</p>
<p><strong>Cantidad:</strong> {{ $traspaso->cantidad }}</p>
<p><strong>Fecha:</strong> {{ $traspaso->fecha }}</p>
<p><strong>Usuario:</strong> {{ $traspaso->usuario->nombre }}</p>

<a href="{{ route('traspasos.edit', $traspaso->id) }}">✏️ Editar</a>
<a href="{{ route('traspasos.index') }}">⬅️ Volver al listado</a>

</x-app-layout>