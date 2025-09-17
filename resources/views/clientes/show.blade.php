@extends('layouts.app')

@section('content')
<h1>Detalle del Cliente</h1>

<p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
<p><strong>Contacto:</strong> {{ $cliente->contacto }}</p>
<p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>

<a href="{{ route('clientes.edit', $cliente->id) }}">✏️ Editar</a>
<a href="{{ route('clientes.index') }}">⬅️ Volver al listado</a>
@endsection