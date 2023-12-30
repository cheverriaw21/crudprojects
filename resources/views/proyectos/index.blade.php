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
                                            <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" class="">
                                                <a href="{{ route('proyectos.show', $proyecto) }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #3b82f6; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#1d4ed8'" onmouseout="this.style.backgroundColor='#3b82f6'">{{__('Ver')}}</a>
                                                <a href="{{ route('proyectos.edit', $proyecto) }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #eab308; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#854d0e'" onmouseout="this.style.backgroundColor='#eab308'">{{__('Editar')}}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-white font-bold py-2 px-4 rounded" style="background-color: #ef4444; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='#b91c1c'" onmouseout="this.style.backgroundColor='#ef4444'">{{__('Eliminar')}}</button>
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

                    <div class="flex justify-center mt-4">
                        {{ $proyectos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
