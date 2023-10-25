<?php

namespace App\Http\Controllers\admin\gereEtudiant;

use App\Http\Controllers\Controller;
use App\Http\Requests\EtudiantRequest;
use App\Models\Etudiants;
use App\Models\Formations;
use Illuminate\Support\Facades\Auth;
class Etudiant extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        /* $etudi=Etudiants::find(2);
        $etudi->formations_id=3;
        $etudi->save();*/

/*
$etud=Etudiants::with('formation')->get();//pour prend les relations

foreach($etud as $e){
$ee = $e->formation?->label;
};*/
$user=Auth::user();
        return view('admin.Etudiant.index',
            [
                'etudiants' => Etudiants::with('formation')->orderBy('created_at', 'desc')->where('user_id','=',$user->id)->paginate(5),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etudiant = new Etudiants();
        $user=Auth::user();
      
        return view('admin.Etudiant.form', [
            'etudiant' => $etudiant,
            'formations' => Formations::select('id', 'label')->get(),
            'user_id'=>$user->id//ajouter id de l utilisateur connecter
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EtudiantRequest $request)
    {
        $etudiant = Etudiants::create($request->validated());

        return to_route('admin.etudiant.index')->with('success', "ajouter avec succes");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiants $etudiant)
    {

        return view('admin.Etudiant.edit', [
            'etudiant' => $etudiant,
            'formations' => Formations::select('id', 'label')->get(),

        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EtudiantRequest $request, Etudiants $etudiant)
    {

        $etudiant->update($request->validated());
        return to_route('admin.etudiant.index')->with('success', 'modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiants $etudiant)
    {
        $etudiant->delete();
        return to_route('admin.etudiant.index')->with('success', 'supprimer avec succes');
    }
    public function show(Etudiants $etudiant)
    {
        //  dd($etudiant);

        return view('admin.Etudiant.show', [
            'etudiant' => $etudiant,

        ]);
    }
}
