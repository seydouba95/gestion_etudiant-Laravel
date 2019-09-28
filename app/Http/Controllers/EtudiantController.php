<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;
use Session;
class EtudiantController extends Controller
{
    public function index(){
        return  view('etudiants')->with('etudiants',Etudiant::orderBy('nom','asc')->paginate(8));
    }

    public function add(){

        //recuperation de la liste de classe
        $c= Classe::orderBy('created_at','desc')->get();

        return view('etudiant_add')->with('classes',$c);
    }

    public function store(Request $request){
              
       if ($request->prenom == null) {
           Session::flash('error','Le champ Prenom doit etre rempli');
           return redirect()->back();
       }
       if ($request->nom == null) {
        Session::flash('error','Le champ Nom doit etre rempli');
        return redirect()->back();
       }
       $etudiant = new Etudiant;
       $etudiant->prenom = $request->prenom;
       $etudiant->nom = $request->nom;
       $etudiant->email = $request->email;
       $etudiant->tel = $request->tel;
       $etudiant->dateNaiss = $request->dateNaiss;
       $etudiant->classe_id = $request->classe_id;
       $etudiant->save();
       Session::flash('success','L\'étudiant a été bien enregistré');
       return redirect()->back();

       
       
    }


    /*
    * Fonction permettant de supprimer un etudiant
    *$id : identifiant de l'etudiant à supprimer
    */
    public function destroy($id){

        //rechercher etudiant par rapport à l'id et supression
   Etudiant::find($id)->delete();
   //creation variable session
   Session::flash('success','L\'étudiant a été bien supprimé');
   return redirect()->back();

 }

 /*
    * Fonction permettant d'afficher le detail d'un etudiant
    *$id : identifiant de l'etudiant à afficher
    */
    public function afficher($id){

        //rechercher etudiant par rapport à l'id et afficher
           $etudiant = Etudiant::where('id',$id)->first();
           //dd($etudiant);
           return view('etudiant_show',['etudiant',$etudiant]);
  


    }


}
