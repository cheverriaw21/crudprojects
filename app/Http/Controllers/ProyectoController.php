<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    //index
    public function index(): Renderable
    {
        $proyectos=Proyecto::paginate(3);
        return view('proyectos.index',compact('proyectos'));
    }

    public function create(): Renderable{
        $proyecto = new Proyecto;
        $title=__('Crear Proyecto');
        $action=route('proyectos.store');
        $buttonText=__('Crear Proyecto');
        return view('proyectos.form',compact('proyecto','title','action','buttonText'));
    }

    //guardar
    public function store(Request $request): RedirectResponse
    {
        // Validación del formulario
        $request->validate([
            'NombreProyecto' => 'required|unique:proyectos,NombreProyecto|string|max:100',
            'fuenteFondos' => 'string|max:1000',
            'MontoPlanificado' => 'required|numeric|min:0',
            'MontoPatrocinado' => 'required|numeric|min:0',
            'MontoFondosPropios' => 'required|numeric|min:0',
        ]);

        // Creación en la base de datos
        Proyecto::create([
            'NombreProyecto' => $request->input('NombreProyecto'),
            'fuenteFondos' => $request->input('fuenteFondos'),
            'MontoPlanificado' => $request->input('MontoPlanificado'),
            'MontoPatrocinado' => $request->input('MontoPatrocinado'),
            'MontoFondosPropios' => $request->input('MontoFondosPropios'),
        ]);

        return redirect()->route('proyectos.index');
    }

    //mostrar
    public function show(Proyecto $proyecto): Renderable
    {
        // Puedes cargar relaciones aquí si es necesario
        return view('proyectos.show', compact('proyecto'));
    }

    //editar variables
    public function edit(Proyecto $proyecto): Renderable
    {
        $title = __('Editar proyecto');
        $action = route('proyectos.update', $proyecto);
        $buttonText = __('Actualizar proyecto');

        return view('proyectos.edit', compact('proyecto', 'title', 'action', 'buttonText'));
    }

    //actualizar
    public function update(Request $request, Proyecto $proyecto): RedirectResponse
    {
        $request->validate([
            'NombreProyecto' => 'required|string|max:100',
            'fuenteFondos' => 'string|max:1000',
            'MontoPlanificado' => 'required|numeric|min:0',
            'MontoPatrocinado' => 'required|numeric|min:0',
            'MontoFondosPropios' => 'required|numeric|min:0',
        ]);

        $proyecto->update([
            'NombreProyecto' => $request->input('NombreProyecto'),
            'fuenteFondos' => $request->input('fuenteFondos'),
            'MontoPlanificado' => $request->input('MontoPlanificado'),
            'MontoPatrocinado' => $request->input('MontoPatrocinado'),
            'MontoFondosPropios' => $request->input('MontoFondosPropios'),
        ]);

        return redirect()->route('proyectos.index');
    }

    //eliminar
    public function destroy(Proyecto $proyecto): RedirectResponse
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index');
    }




}
