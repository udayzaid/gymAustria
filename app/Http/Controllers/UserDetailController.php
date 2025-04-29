<?php
namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    /**
     * Almacena los datos del usuario.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'peso' => 'required|numeric|min:0',
            'talla' => 'required|numeric|min:0',
            'membresia' => 'required|string|max:255',
        ]);

        $userDetail = new UserDetail();
        $userDetail->user_id = auth()->id();
        $userDetail->nombre_completo = $request->nombre_completo;
        $userDetail->edad = $request->edad;
        $userDetail->peso = $request->peso;
        $userDetail->talla = $request->talla;
        $userDetail->membresia = $request->membresia;
        $userDetail->peso_inicial = $request->peso; // Guardamos el peso inicial
        $userDetail->peso_meta = $request->peso_meta ?? $request->peso; // Si no hay meta, usamos el peso actual
        $userDetail->ejercicios = 0;
        $userDetail->kcal = 0;
        $userDetail->minutos = 0;
        
        $userDetail->save();

        return redirect()->route('dashboard')->with('status', 'Datos añadidos correctamente.');
    }

    /**
     * Muestra los datos del usuario autenticado.
     */
    public function index()
    {
        $userDetails = UserDetail::where('user_id', auth()->id())->get();
        return view('dashboard', compact('userDetails'));
    }

    /**
     * Actualiza los datos del usuario.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'peso' => 'required|numeric|min:0',
            'talla' => 'required|numeric|min:0',
            'membresia' => 'required|string|max:255',
            'peso_inicial' => 'required|numeric|min:0',
            'peso_meta' => 'required|numeric|min:0',
        ]);

        $userDetail = UserDetail::where('user_id', auth()->id())->findOrFail($id);
        
        // Si el peso cambia, actualizamos las estadísticas
        if ($userDetail->peso != $request->peso) {
            // Si el nuevo peso es menor que el anterior, sumamos ejercicios y calorías
            if ($request->peso < $userDetail->peso) {
                $userDetail->ejercicios += 1;
                $userDetail->kcal += 100;
                $userDetail->minutos += 30;
            }
        }

        $userDetail->nombre_completo = $request->nombre_completo;
        $userDetail->edad = $request->edad;
        $userDetail->peso = $request->peso;
        $userDetail->talla = $request->talla;
        $userDetail->membresia = $request->membresia;
        $userDetail->peso_inicial = $request->peso_inicial;
        $userDetail->peso_meta = $request->peso_meta;
        
        $userDetail->save();

        return redirect()->route('dashboard')->with('status', 'Datos actualizados correctamente.');
    }
}
