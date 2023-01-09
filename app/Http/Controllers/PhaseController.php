<?php

namespace App\Http\Controllers;

use App\Models\Phase;
use Illuminate\Http\Request;

class PhaseController extends Controller
{
    public function phase($id) {
        return view('phase', ['id' =>$id]);
    }

    public function storePhase(Request $request) {
        Phase::create([
            'nom' => $request->nom,
            'duree' => $request->duree,
            'priorite' => $request->priorite,
            'projet_id' =>$request->id,
        ]);
       
        return redirect('/detail'.'/'.$request->id); 
    }

    public function supprimer($id) {
        $projet = Phase::find($id);
        $projet->delete();
        return redirect('/detail'.'/'.$projet->projet_id);
    }

    
    public function editer($id)
    {
        $phase = Phase::find($id);
        return view('editer', ['phase' =>$phase]);
       
    }

    public function updated($id,Request $request) {
        $phase = Phase::find($id);
        $phase->nom = $request->nom;
        $phase->duree = $request->duree;
        $phase->priorite = $request->priorite;


        $phase->save();
        return redirect('/detail'.'/'.$phase->projet_id);
    }
}
