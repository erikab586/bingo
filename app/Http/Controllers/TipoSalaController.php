<?php

namespace App\Http\Controllers;
use App\Models\TipoSalaModel;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TipoSalaController extends Controller
{
    public function create(): View
    {
        return view('back.tiposala.crear');
    }   
    
    public function store(Request $request)
    {
        $tipo = new TipoSalaModel();
        $tipo->descripcion_tipo = $request->input('descripcion');
        $tipo->save();
        return redirect()->route('mostrartipo')->with('success', 'Tipo de sala creada exitosamente');
    }

    public function show(): View
    {   $tipo = DB::table('tipo_sala')->get();
        return view('back.tiposala.mostrar',['tipo' => $tipo]);
    }

    public function edit($id): View
    {
        $tipo = TipoSalaModel::findOrFail($id);
        return view('back.tiposala.editar', ['tipo' => $tipo]);
    }

    public function update(Request $request)
    {
        $tipo = TipoSalaModel::findOrFail($request->id);
        $tipo->descripcion_tipo = $request->input('descripcion');
        $tipo->save();
        return redirect()->route('mostrartipo')->with('success', 'Tipo de Sala modificada exitosamente');
    }

    public function destroy($id)
    {
        $tipo = TipoSalaModel::findOrFail($id);
        $tipo->delete();
        return redirect()->route('mostrartipo')->with('success', 'Tipo de Sala borrada exitosamente');
    }
}
