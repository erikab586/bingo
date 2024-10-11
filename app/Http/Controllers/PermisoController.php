<?php

namespace App\Http\Controllers;
use App\Models\PermisoModel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
class PermisoController extends Controller
{
    public function create(): View
    {
        return view('back.permiso.crear');
    }   

    public function store(Request $request)
    {
        $permiso = new PermisoModel();
        $permiso->descripcion_permiso = $request->input('descripcion');
        $permiso->save();
        return redirect()->route('mostrarpermiso')->with('success', 'Permiso creado exitosamente');
    }

    public function show(): View
    {
        $permiso = DB::table('permiso')->get();
        return view('back.permiso.mostrar', ['permiso' => $permiso]);
    }

    public function edit($id): View
    {
        $permiso = PermisoModel::findOrFail($id);
        return view('back.permiso.editar', ['permiso' => $permiso]);
    }

    public function update(Request $request)
    {
        $permiso = PermisoModel::findOrFail($request->id);
        $permiso->descripcion_permiso = $request->input('descripcion');
        $permiso->save();
        return redirect()->route('mostrarpermiso')->with('success', 'Permiso modificado exitosamente');
    }

    public function destroy($id)
    {
        $permiso = PermisoModel::findOrFail($id);
        $permiso->delete();
        return redirect()->route('mostrarpermiso')->with('success', 'Permiso borrado exitosamente');
    }
}
