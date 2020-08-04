<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visiteur;

class VisiteursController extends Controller
{

    public function liste(Request $request)
    {
        $visit=Visiteur::paginate(6);
        return view('Visiteur/liste',['visiteur'=>$visit]);
    }


    public function forme()
    {
        return view('Visiteur/forme');
    }

    function store(Request $request)
    {
        $visite=new Visiteur();

        // $visite->nom=$request->nom;
        // $visite->prenom=$request->prenom;
        $visite->email=$request->email;
        // $visite->mot_de_passe=$request->mot_de_passe;
        $visite->save();
        return redirect('forme-visiteur')->with('message','Soucription effectuée avec success!');
    }

    public function destroy(Request $request){
      $visit=Visiteur::find($request->id);
      $visit->delete();
      return redirect('Visiteur/liste');
    }

    public function email(){

        return view('Mail/forme');
    }
}
