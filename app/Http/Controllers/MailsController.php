<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailsController extends Controller
{ 
    public function create($id)
    {
        $visit=Visiteur::find($id);
        return view('Visiteur/liste', ['visiteur'=>$visit]);
    }

    public function store(Request $request)
    {
        dd($request);
        $data=request()->validate([
            'destinatare'=>'required',
            'objet'=>'required|email',
            'message'=>'required'
        ]);
        Mail::to($data['email'])->send(new MailsController());
    }
}
