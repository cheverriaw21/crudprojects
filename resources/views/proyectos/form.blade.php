<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="NombreProyecto" class="block text-sm font-semibold text-gray-800 dark:text-gray-800">Nombre del Proyecto</label>
                            <input type="text" name="NombreProyecto" id="NombreProyecto" class="w-full mt-1 p-2 border rounded-md" value="{{ old('NombreProyecto') }}" required autofocus />
                            @error('NombreProyecto')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="fuenteFondos" class="block text-sm font-semibold text-gray-800 dark:text-gray-800">Fuente de Fondos</label>
                            <input type="text" name="fuenteFondos" id="fuenteFondos" class="w-full mt-1 p-2 border rounded-md" value="{{ old('fuenteFondos') }}" />
                            @error('fuenteFondos')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="MontoPlanificado" class="block text-sm font-semibold text-gray-800 dark:text-gray-800">Monto Planificado</label>
                            <input type="number" name="MontoPlanificado" id="MontoPlanificado" class="w-full mt-1 p-2 border rounded-md" value="{{ old('MontoPlanificado') }}" required />
                            @error('MontoPlanificado')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="MontoPatrocinado" class="block text-sm font-semibold text-gray-800 dark:text-gray-800">Monto Patrocinado</label>
                            <input type="number" name="MontoPatrocinado" id="MontoPatrocinado" class="w-full mt-1 p-2 border rounded-md" value="{{ old('MontoPatrocinado') }}" required />
                            @error('MontoPatrocinado')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="MontoFondosPropios" class="block text-sm font-semibold text-gray-800 dark:text-gray-800">Monto Fondos Propios</label>
                            <input type="number" name="MontoFondosPropios" id="MontoFondosPropios" class="w-full mt-1 p-2 border rounded-md" value="{{ old('MontoFondosPropios') }}" required />
                            @error('MontoFondosPropios')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-green-700 hover:bg-green-950 text-white font-bold py-2 px-4 rounded">{{ $buttonText }}</button>
                            <a href="{{ route('proyectos.index') }}" class="bg-gray-300 hover:bg-gray-600 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" >
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
