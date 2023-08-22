<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant(){
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajouter_etudiant(){
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request){
        $request->validate([
            'prenom'=> 'required',
            'nom'=> 'required',
            'numero_carte'=> 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->numero_carte = $request->numero_carte;
        $etudiant->save();


        return redirect('/ajouter')->with('status', 'L\'etudiant a ete bien ajouter avec succes.');

    }
    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }
    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'prenom'=> 'required',
            'nom'=> 'required',
            'numero_carte'=> 'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->numero_carte = $request->numero_carte;
        $etudiant->update();

        return redirect('/etudiant')->with('status', 'L\'etudiant a ete bien modifier avec succes.');
    }

    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'L\'etudiant a ete bien supprimer avec succes.');
    }
}
