<?php

namespace App\Http\Controllers;
use App\Models\SalaModel;
use App\Models\TipoSalaModel;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SalaController extends Controller
{
    public function index(): View
    {
        return view('back.escritorio');
    }
    public function create(): View
    {
        $tipo= TipoSalaModel::all();
        return view('back.sala.crear', ['tipo'=>$tipo]);
    }   

    public function store(Request $request)
    {
        if ($request->hasFile('imagensala')) {
            $filenameWithExt = $request->file('imagensala')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagensala')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('imagensala')->storeAs('images', $fileNameToStore, 'public');
            $imagePath = 'images/' . $fileNameToStore;
        } else {
            $imagePath = 'images/noimage.jpg';
        }

        // Crear instancia y asignar valores
        $sala = new SalaModel();
        $sala->titulo = $request->input('titulo');
        $sala->img_sala= $imagePath;
        $sala->costo = $request->input('costo');
        $sala->id_tipo = $request->input('tipo');
        $sala->estatus = $request->input('estatus');

        // Guardar en la base de datos
        $sala->save();

        return redirect()->route('mostrarsala')->with('success', 'Sala creada exitosamente');
    }
    

    public function show(): View
    {
        $sala = DB::table('sala')->get();
        return view('back.sala.mostrar',['sal'=>$sala]);
    }

    public function edit($id): View
    {
        $sala = SalaModel::findOrFail($id);
        return view('back.permiso.editar', ['sala' => $sala]);
    }

    public function update(Request $request)
    {
        $sala = SalaModel::findOrFail($request->id);
        $sala->descripcion_permiso = $request->input('descripcion');
        $sala->save();
        return redirect()->route('mostrarsala')->with('success', 'Sala modificada exitosamente');
    }

    public function destroy($id)
    {
        $sala = SalaModel::find($id);
        $sala->delete();
        return redirect()->route('mostrarsala')->with('success', 'Sala borrada exitosamente');
    }
}
