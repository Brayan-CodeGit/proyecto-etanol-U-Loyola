@extends('layouts.app')

@section('content')
<h1>Detalle del Proveedor</h1>

<p><strong>Nombre:</strong> {{ $proveedor->nombre }}</p>
<p><strong>Contacto:</strong> {{ $proveedor->contacto }}</p>
<p><strong>Dirección:</strong> {{ $proveedor->direccion }}</p>

<a href="{{ route('proveedores.edit', $proveedor->id) }}">✏️ Editar</a>
<a href="{{ route('proveedores.index') }}">⬅️ Volver al listado</a>
@endsection