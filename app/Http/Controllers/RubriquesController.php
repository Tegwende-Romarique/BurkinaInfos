<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rubrique;

class RubriquesController extends Controller
{

    public function liste()
    {
        $rubriqu=Rubrique::paginate(3);
        return view('Rubrique/liste',['rubrique'=>$rubriqu]);
    }

   public function forme()
    {
        return view('Rubrique/forme');
    }

    function store(Request $request)
    {
        $rubriqu=new Rubrique();
        $rubriqu->categorie=$request->categorie;
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
        $rubriqu->update();
    }

    
    public function publier(Request $request){
        $rubriqu=Rubrique::find($request->id);
        return view('Rubrique/publier', ['rubrique'=>$rubriqu]);
    }

}
