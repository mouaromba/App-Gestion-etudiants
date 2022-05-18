<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('liste', [
            'etudiants' => Etudiant::all()
        ]);
    }

    public function create()
    {
        return view('formulaire');
    }

    public function accueil()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        Etudiant::create($request->all());
        return redirect()->route('liste');
    }

    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show',compact('etudiant'));
    }

    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit',compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([

        ]);

        $etudiant->update($request->all());

        return redirect()->route('etudiants.index')
        ->with('success','Etudiant updated successfully.');
    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect()->route('etudiants.index')
        ->with('success','Etudiant deleted successfully.');
    }
}
