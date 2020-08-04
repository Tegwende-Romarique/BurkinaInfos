<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rubrique;

class RubriquesController extends Controller
{

    public function liste()
    {
        $rubriqu=Rubrique::all();
        return view('/accueil',['rubrique'=>$rubriqu]);
    }

     public function publier()
    {
        $admin=Rubrique::paginate(3);

        return view('Rubrique/liste',['rubrique'=>$admin]);
    }


   public function forme()
    {
        return view('Rubrique/forme');
    }

    function store(Request $request)
    {
        $rubriqu=new Rubrique();
        $rubriqu->categorie=$request->categorie;
        // $rubriqu->status=$request->status;
        $rubriqu->save();
        return redirect('Rubrique/forme')->with('message','Rubrique Enregistrée avec succes!');
    }

    public function destroy(Request $request){
        $rubriqu=Rubrique::find($request->id);
        $rubriqu->delete();
        return redirect('Rubrique/liste');
    }

    public function editer(Request $request){

        return view('Rubrique/editer',['id'=>$request->id]);
    }

    public function update(Request $request){
        $rubriqu=Rubrique::find($request->id);
        $rubriqu->categorie=$request->categorie;
        // $rubriqu->status=$request->status;
        $rubriqu->update();
    }


    // public function publier(Request $request){
    //     $rubriqu=Rubrique::find($request->id);
    //     return view('Rubrique/publier', ['rubrique'=>$rubriqu]);
    // }

}
