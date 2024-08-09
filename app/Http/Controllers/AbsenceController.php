<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function index()
    {
        $absences = Absence::all();
        return view('absences.index', compact('absences'));
    }

    public function create()
    {
        return view('absences.create');
    }

    public function store(Request $request)
    {
        // Désactivez temporairement la validation de l'existence de l'utilisateur
        $validatedData = $request->validate([
            'user_id' => 'required|integer', // Retirez 'exists:users,id' pour désactiver la vérification
            'date' => 'required|date',
            'heure_debut' => 'required',
            'heure_fin' => 'required',
            'raison' => 'required|string',
        ]);

        // Créez l'absence
        Absence::create($validatedData);

        return redirect()->route('absences.index')->with('success', 'Absence ajoutée avec succès.');
    }



    public function show(Absence $absence)
    {
        return view('absences.show', compact('absence'));
    }

    public function edit(Absence $absence)
    {
        return view('absences.edit', compact('absence'));
    }

    public function update(Request $request, Absence $absence)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'date' => 'required|date',
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'required|date_format:H:i',
            'raison' => 'nullable|string',
        ]);

        $absence->update($request->all());
        return redirect()->route('absences.index');
    }

    public function destroy(Absence $absence)
    {
        $absence->delete();
        return redirect()->route('absences.index');
    }
}
