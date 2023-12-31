<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{__('Proyectos')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl font-bold">{{__('Proyectos')}}</h1>
                        <a href="{{ route('proyectos.create') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded" >{{__('Nuevo Proyecto')}}</a>
                    </div>
                    <div class="mt-4">
                        <table class="w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2">{{__('Nombre del Proyecto')}}</th>
                                    <th class="px-4 py-2">{{__('Fuente de Fondos')}}</th>
                                    <th class="px-4 py-2">{{__('Monto Planificado')}}</th>
                                    <th class="px-4 py-2">{{__('Monto Patrocinado')}}</th>
                                    <th class="px-4 py-2">{{__('Monto Fondos Propios')}}</th>
                                    <th class="px-4 py-2">{{__('Acciones')}}</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @forelse ($proyectos as $proyecto)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $proyecto->NombreProyecto }}</td>
                                        <td class="border px-4 py-2">{{ $proyecto->fuenteFondos }}</td>
                                        <td class="border px-4 py-2">$ {{ $proyecto->MontoPlanificado }}</td>
                                        <td class="border px-4 py-2">$ {{ $proyecto->MontoPatrocinado }}</td>
                                        <td class="border px-4 py-2">$ {{ $proyecto->MontoFondosPropios }}</td>
                                        <td class="border px-4 py-2" style="width: 260px">
                                        <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" class="flex items-center">
                                            <a href="{{ route('proyectos.show', $proyecto) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">{{__('Ver')}}</a>
                                            <a href="{{ route('proyectos.edit', $proyecto) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">{{__('Editar')}}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">{{__('Eliminar')}}</button>
                                            <a href="{{ route('proyectos.informepdf', ['proyecto' => $proyecto]) }}" class="text-gray-800 font-bold py-2 px-4 rounded">
                                                <img src="{{ asset('images/pdf.png') }}" alt="Descargar PDF" class="w-4 h-4 mr-2">
                                                pdf
                                            </a>
                                        </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-red-400 text-white text-center">
                                        <td colspan="6" class="border px-4 py-2">{{__('No hay proyectos para mostrar')}}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="flex flex-col space-y-8 justify-center mt-4">
                        {{ $proyectos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
