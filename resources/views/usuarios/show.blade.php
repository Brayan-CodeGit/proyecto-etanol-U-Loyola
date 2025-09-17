@extends('layouts.app')

@section('content')
<h1>Detalle del Usuario</h1>

<p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
<p><strong>Correo:</strong> {{ $usuario->correo }}</p>
<p><strong>Rol:</strong> {{ $usuario->rol }}</p>

<a href="{{ route('usuarios.edit', $usuario->id) }}">✏️ Editar</a>
<a href="{{ route('usuarios.index') }}">⬅️ Volver al listado</a>
@endsection