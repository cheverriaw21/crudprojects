<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $proyecto->NombreProyecto }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-2xl font-semibold text-gray-800 dark:text-gray-800">Detalles del Proyecto:</p>

                    <ul class="list-disc ml-4 mt-4">
                        <li class="mt-4"><strong>Nombre del Proyecto:</strong> {{ $proyecto->NombreProyecto }}</li>
                        <li class="mt-4"><strong>Fuente de Fondos:</strong> {{ $proyecto->fuenteFondos ?? 'N/A' }}</li>
                        <li class="mt-4"><strong>Monto Planificado:</strong> ${{ $proyecto->MontoPlanificado }}</li>
                        <li class="mt-4"><strong>Monto Patrocinado:</strong> ${{ $proyecto->MontoPatrocinado }}</li>
                        <li class="mt-4"><strong>Monto Fondos Propios:</strong> ${{ $proyecto->MontoFondosPropios }}</li>
                        <li class="mt-4"><strong>Fecha de Creación:</strong> {{ $proyecto->created_at }}</li>
                        <li class="mt-4"><strong>Última Actualización:</strong> {{ $proyecto->updated_at }}</li>
                    </ul>
                    <div class="ml-4 mt-4">
                        <a href="{{ route('proyectos.index') }}" class="bg-gray-300 hover:bg-gray-600 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                            Volver
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
