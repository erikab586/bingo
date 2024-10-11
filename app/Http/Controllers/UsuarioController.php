<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{   //METODO QUE MUESTRA EL LOGIN DE ADMINITRADOR
    public function registrar(): View
    {
        return view('back.registro');
    }

    public function iniciar(): View
    {
        return view('back.login');
    }

    public function verificar(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['user' => $user]);
            return redirect()->intended('/escritorio');
        }

        // Autenticación fallida
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function create(): View
    {
        return view('back.usuario.crear');
    }   

    public function store(Request $request)
    {
        $rol = "Administrador";
        $verificar = now()->format('Y-m-d H:i:s');

        // Crear un nuevo usuario
        $user = new User();
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->nacimiento= $request->input('nacimiento');
        $user->telefono = $request->input('telefono');
        $user->email = $request->input('email');
        $user->email_verified_at= $verificar;
        $user->direccion = $request->input('direccion');
        $user->rol = $rol;
        $user->password = bcrypt($request->input('password')); // Encriptar la contraseña
        $user->facebook_id = $request->input('facebook');
        $user->google_id = $request->input('google');
        $user->save();
        // Redirigir a una vista de éxito o a la lista de usuarios
        return redirect()->route('mostraruser')->with('success', 'Usuario creado exitosamente');
    }
    
   

    public function show(): View
    {
        $user = DB::table('users')->get();
        return view('back.usuario.mostrar',['user' => $user]);
    }

    public function edit($id): View
    {
        $user = User::findOrFail($id);
        return view('back.usuario.editar', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $verificar = now()->format('Y-m-d H:i:s');
        $user = User::findOrFail($request->id);
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->nacimiento= $request->input('nacimiento');
        $user->telefono = $request->input('telefono');
        $user->email = $request->input('email');
        $user->email_verified_at= $verificar;
        $user->direccion = $request->input('direccion');
        $user->rol = $request->input('rol'); 
        $user->facebook_id = $request->input('facebook');
        $user->google_id = $request->input('google');
        $user->save();
        return redirect()->route('mostraruser')->with('success', 'Usuario modificado exitosamente');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('mostraruser')->with('success', 'Usuario borrado exitosamente');
        //return response()->json(['message' => 'Usuario eliminado correctamente.']);
    }


}
