<?php

namespace App\Http\Controllers;

use App\Models\Retard;
use Illuminate\Http\Request;

class RetardController extends Controller
{
    public function index()
    {
        $retards = Retard::all();
        return view('retards.index', compact('retards'));
    }

    public function create()
    {
        return view('retards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'minutes' => 'required|integer',
            'reason' => 'nullable|string',
        ]);

        Retard::create($request->all());
        return redirect()->route('retards.index')->with('success', 'Retard created successfully.');
    }

    public function edit(Retard $retard)
    {
        return view('retards.edit', compact('retard'));
    }

    public function update(Request $request, Retard $retard)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'minutes' => 'required|integer',
            'reason' => 'nullable|string',
        ]);

        $retard->update($request->all());
        return redirect()->route('retards.index')->with('success', 'Retard updated successfully.');
    }

    public function destroy(Retard $retard)
    {
        $retard->delete();
        return redirect()->route('retards.index')->with('success', 'Retard deleted successfully.');
    }
}
