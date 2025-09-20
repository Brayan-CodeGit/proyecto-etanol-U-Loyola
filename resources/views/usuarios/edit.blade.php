<!-- @extends('layouts.app')

@section('content')
<h1>Editar Usuario</h1>

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>

    <label>Correo:</label>
    <input type="email" name="correo" value="{{ $usuario->correo }}" required>

    <label>Contraseña (opcional):</label>
    <input type="password" name="contraseña">

    <label>Rol:</label>
    <select name="rol" required>
        <option value="Administrador" {{ $usuario->rol == 'Administrador' ? 'selected' : '' }}>Administrador</option>
        <option value="Operador" {{ $usuario->rol == 'Operador' ? 'selected' : '' }}>Operador</option>
        <option value="Supervisor" {{ $usuario->rol == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
    </select>

    <button type="submit">Actualizar</button>
</form>
@endsection -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar Usuario
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Nombre -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="'Nombre'" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            value="{{ old('name', $usuario->name) }}" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="'Email'" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            value="{{ old('email', $usuario->email) }}" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Rol -->
                    <div class="mt-4">
                        <x-input-label for="rol" :value="'Rol'" />
                        <select name="rol" class="block mt-1 w-full" required>
                            <option value="Operador" {{ $usuario->rol == 'Operador' ? 'selected' : '' }}>Operador</option>
                            <option value="Supervisor" {{ $usuario->rol == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
                            <option value="Administrador" {{ $usuario->rol == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                        </select>
                        <x-input-error :messages="$errors->get('rol')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-end">
                        <x-primary-button>
                            Guardar cambios
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
