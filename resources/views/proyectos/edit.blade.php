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
                        @method('PUT') {{-- Utilizamos PUT para la actualización --}}

                        <div class="mb-4">
                            <label for="NombreProyecto" class="block text-gray-700 text-sm font-bold mb-2">{{__('Nombre del Proyecto:')}}</label>
                            <input type="text" name="NombreProyecto" id="NombreProyecto" value="{{ old('NombreProyecto', $proyecto->NombreProyecto) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
                            @error('NombreProyecto')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="fuenteFondos" class="block text-gray-700 text-sm font-bold mb-2">{{__('Fuente de Fondos:')}}</label>
                            <input type="text" name="fuenteFondos" id="fuenteFondos" value="{{ old('fuenteFondos', $proyecto->fuenteFondos) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                            @error('fuenteFondos')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="MontoPlanificado" class="block text-gray-700 text-sm font-bold mb-2">{{__('Monto Planificado ($):')}}</label>
                            <input type="number" name="MontoPlanificado" id="MontoPlanificado" value="{{ old('MontoPlanificado', $proyecto->MontoPlanificado) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" min="0" required >
                            @error('MontoPlanificado')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="MontoPatrocinado" class="block text-gray-700 text-sm font-bold mb-2">{{__('Monto Patrocinado ($):')}}</label>
                            <input type="number" name="MontoPatrocinado" id="MontoPatrocinado" value="{{ old('MontoPatrocinado', $proyecto->MontoPatrocinado) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" min="0" required>
                            @error('MontoPatrocinado')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="MontoFondosPropios" class="block text-gray-700 text-sm font-bold mb-2">{{__('Monto Fondos Propios ($):')}}</label>
                            <input type="number" name="MontoFondosPropios" id="MontoFondosPropios" value="{{ old('MontoFondosPropios', $proyecto->MontoFondosPropios) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" min="0" required>
                            @error('MontoFondosPropios')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Botones --}}
                        <div class="flex justify-end">
                            <button type="submit" class="bg-green-700 hover:bg-green-950 text-white font-bold py-2 px-4 rounded mr-2" >{{ $buttonText }}</button>
                            <a href="{{ route('proyectos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
