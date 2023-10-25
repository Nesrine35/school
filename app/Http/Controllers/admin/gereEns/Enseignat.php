<?php

namespace App\Http\Controllers\admin\gereEns;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnseignantRequest;
use App\Models\Enseignants;
use Illuminate\Support\Facades\Auth;

class Enseignat extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user=Auth::user();
    
        return view('admin.Enseigant.index',
            [
                'enseignants' =>Enseignants::ens()->paginate(5),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enseignant = new Enseignants();
        return view('admin.Enseigant.form', [
            'enseignant' => $enseignant,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnseignantRequest $request)
    {
        $enseignant = Enseignants::create($request->validated());
        return to_route('admin.enseignant.index')->with('success', "ajouter avec succes");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enseignants $enseignant)
    {
        return view('admin.Enseigant.edit', [
            'enseignant' => $enseignant,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EnseignantRequest $request, Enseignants $enseignant)
    {
        $enseignant->update($request->validated());
        return to_route('admin.enseignant.index')->with('success', 'modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enseignants $enseignant)
    {
        $enseignant->delete();
        return to_route('admin.enseignant.index')->with('success', 'modifier avec succes');
    }
    public function show(Enseignants $enseignant)
    {
        return view('admin.Enseigant.show', [
            'enseignant' => $enseignant,
        ]);
    }
}
