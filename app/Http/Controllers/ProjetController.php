<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function projet() {
        $projets = Projet::all();
        return view('projet', ['projets' => $projets]);
    }

    public function ajout() {
        return view('ajout');
    }

    public function store(Request $request) {
        
        Projet::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);
       
        return redirect('/projet'); 

    }

    public function edit($id)
    {
        $projet = Projet::find($id);
        return view('edit', ['projet' =>$projet]);
       
    }

    public function update($id,Request $request) {
        $projet = Projet::find($id);
        $projet->nom = $request->nom;
        $projet->description = $request->description;
        $projet->date_debut = $request->date_debut;
        $projet->date_fin = $request->date_fin;

        $projet->save();
        return redirect('/projet');
    }

    public function delete($id) {
        $projet = Projet::find($id);
        $projet->delete();
        return redirect('/projet');
    }

    public function detail($id) {
        $projet = Projet::find($id);
        return view('detail', ['projet' => $projet]);
    }

   
}
