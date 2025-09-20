<!-- <nav class="bg-gray-800 text-white p-4">
    <ul class="flex space-x-4">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>

        @if (Auth::user()->rol === 'Administrador')
            <li><a href="{{ route('usuarios.index') }}">Gestión de Usuarios</a></li>
            <li><a href="{{ route('reportes.index') }}">Reportes</a></li>
        @elseif (Auth::user()->rol === 'Supervisor')
            <li><a href="{{ route('produccion.index') }}">Producción</a></li>
        @elseif (Auth::user()->rol === 'Operador')
            <li><a href="{{ route('tareas.index') }}">Mis Tareas</a></li>
        @endif

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>
        </li>
    </ul>
</nav> -->
<nav class="bg-gray-900 text-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo / Nombre del sistema -->
            <div class="flex-shrink-0">
                <a href="{{ route('dashboard') }}" class="text-xl font-bold text-white hover:text-indigo-400">
                    Bioetanol System
                </a>
            </div>

            <!-- Enlaces del menú -->
            <div class="flex space-x-6">
                <a href="{{ route('dashboard') }}" class="hover:text-indigo-300 transition">Dashboard</a>

                @if (Auth::user()->rol === 'Administrador')
                    <a href="{{ route('usuarios.index') }}" class="hover:text-indigo-300 transition">Usuarios</a>
                    <a href="{{ route('reportes.index') }}" class="hover:text-indigo-300 transition">Reportes</a>
                @elseif (Auth::user()->rol === 'Supervisor')
                    <a href="{{ route('produccion.index') }}" class="hover:text-indigo-300 transition">Producción</a>
                @elseif (Auth::user()->rol === 'Operador')
                    <a href="{{ route('tareas.index') }}" class="hover:text-indigo-300 transition">Mis Tareas</a>
                @endif
            </div>

            <!-- Usuario + Logout -->
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-300">Hola, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>