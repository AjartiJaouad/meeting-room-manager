<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\Service;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    
    public function index()
    {
        $salles = Salle::with('service')->get();
        return view('admin.salles.index', compact('salles'));
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.salles.create', compact('services'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_salle'  => 'required|string|max:255',
            'type_salle' => 'required|string',
            'capacite'   => 'required|integer|min:1',
            'service_id' => 'required|exists:services,id',
        ]);

        Salle::create($validated);

        return redirect()->route('salles.index')->with('success', 'La salle a été créée avec succès.');
    }

}
