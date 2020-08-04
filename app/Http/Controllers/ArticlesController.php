<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visiteur;
use App\Article;
use App\Rubrique;

class ArticlesController extends Controller
{

    public function liste(){
        $rubirques= Rubrique::all();
        $articles= Article::all();
        return view('Article/liste', ['rubirque'=>$rubirques, 'article'=>$articles]);
    }

    public function breakingNews()
    {
        $rubriques= Rubrique::all();
        $articles= Article::all();
        return view('/accueil', ['rubrique'=>$rubriques, 'article'=>$articles]);
    }


    public function forme()
    {
        $rubirques = Rubrique::all();

        return view('Article/forme', ['rubrique'=>$rubirques]);
    }

    function store(Request $request)
    {
        $art=new Article();
        $art->rubrique_id=$request->rubrique_id;

        $art->titre=$request->titre;
        $art->libelle=$request->libelle;
        $art->contenu=$request->contenu;
        $art->date=$request->date;
        $art->photo=$request->photo->store('app/public/photos','public');
        $art->save();
        return redirect('forme-Article');
    }

}
