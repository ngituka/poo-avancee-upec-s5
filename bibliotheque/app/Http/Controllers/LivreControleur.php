<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class LivreControleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::all();
        return view('livres.index', [
            'livres' => $livres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Question 7 : Validation des données
        $request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'annee_publication' => 'required|integer',
        ]);

        // Question 8 : Enregistrement si tout est valide
        Livre::create($request->all());

        return redirect()->route('livres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livre $livre)
    {
        return view('livres.edit', [
            'livre' => $livre
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livre $livre)
    {
        $request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'annee_publication' => 'required|integer',
        ]);

        // Mise à jour des informations dans la base de données
        $livre->update($request->all());

        // Redirection vers la liste des livres comme demandé
        return redirect()->route('livres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        $livre->delete();

        // Redirige l'utilisateur vers la liste des livres[cite: 3]
        return redirect()->route('livres.index');
    }
}
