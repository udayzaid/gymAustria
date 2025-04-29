<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;

class HealthReportController extends Controller
{
    public function index()
    {
        $userDetails = UserDetail::where('user_id', auth()->id())->first();
        
        // Si no hay detalles, crear un registro vacío
        if (!$userDetails) {
            $userDetails = new UserDetail();
            $userDetails->ejercicios = 0;
            $userDetails->kcal = 0;
            $userDetails->minutos = 0;
            $userDetails->peso = 0;
            $userDetails->talla = 0;
            $userDetails->peso_meta = 0;
            $userDetails->peso_inicial = 0;
        }

        return view('health-report', compact('userDetails'));
    }

    public function updateWeight(Request $request)
    {
        $request->validate([
            'peso' => 'required|numeric|min:0',
        ]);

        $userDetails = UserDetail::where('user_id', auth()->id())->first();
        
        if (!$userDetails) {
            $userDetails = new UserDetail();
            $userDetails->user_id = auth()->id();
            $userDetails->peso_inicial = $request->peso;
        }

        $userDetails->peso = $request->peso;
        $userDetails->save();

        return redirect()->back()->with('success', 'Peso actualizado correctamente');
    }

    public function updateGoal(Request $request)
    {
        $request->validate([
            'peso_meta' => 'required|numeric|min:0',
        ]);

        $userDetails = UserDetail::where('user_id', auth()->id())->first();
        
        if ($userDetails) {
            $userDetails->peso_meta = $request->peso_meta;
            $userDetails->save();
        }

        return redirect()->back()->with('success', 'Meta de peso actualizada correctamente');
    }
}
