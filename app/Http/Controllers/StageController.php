<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;
use League\CommonMark\Extension\DescriptionList\Parser\DescriptionContinueParser;

class StageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Stages.add');
    }

    public function store(Request $request)
    {
        // dd($request);

        $nom=$request->nom;
        $prenom=$request->prenom;
        $filiere=$request->filiere;
        $sujet=$request->sujet;
        $Description=$request->description;
        $duree=$request->duree;
        $entreprise=$request->entreprise;
        $email=$request->email;
        $tel=$request->tel;

        //Validation
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'filiere'=>'required',
            'sujet'=>'required',
            // 'description'=>'required',
            'duree'=>'required',
            'entreprise'=>'required',
            'email'=>'required',
            'tel'=>'required',
        ]);

        //Insertion
        Stage::create([
            'nom'=>$nom,
            'prenom'=>$prenom,
            'filiere'=>$filiere,
            'sujet'=>$sujet,
            'description'=>$Description,
            'duree'=>$duree,
            'entreprise'=>$entreprise,
            'email'=>$email,
            'tel'=>$tel,
        ]);
        //  return '<h1>Stage ajoute avec succes</h1>' ;
        return redirect()->route('Stages.add')->with('success','Stage ajouté avec succès');
    }
}