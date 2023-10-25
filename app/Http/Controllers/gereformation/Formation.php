<?php

namespace App\Http\Controllers\gereformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FormationRequest;

use App\Models\Formations;

class Formation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.Formation.index',
            [
                'formations' => Formations::orderBy('created_at', 'desc')->paginate(5)
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formation = new Formations();
        return view('admin.Formation.form', [
            'formation' => $formation
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormationRequest $request)
    {
        $formation = Formations::create($this->extraData(new Formations(), $request));
        return to_route('admin.formation.index')->with('success', "ajouter avec succes");
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formations $formation)
    {
        return view('admin.Formation.edit', [
            'formation' => $formation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormationRequest $request, Formations $formation)

    {
        $formation->update($this->extraData($formation, $request));
        // $formation->update($request->validated());
        return redirect()->route('admin.formation.index')->with('success', 'modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formations $formation)
    {
        $formation->delete();
        return to_route('admin.formation.index')->with('success', 'supprimer avec succes');
    }
    private function extraData(Formations $nesrine, FormationRequest $request): array //cette fonction pour ajouter et ki nasta3amlo des photos w nbadlohom yatfassaw automatique men l fichier storage
    {
        $data = $request->validated();
        /** @var UploadedFile|null $image */
        $image = $request->validated('image');
        if ($image == null || $image->getError()) { //si l image n' est pas null &&& pas d 'erreur
            return $data;
        }
        if ($nesrine->image) {
            Storage::disk('public')->delete($nesrine->image);
        }
        $data['image'] = $image->store('images', 'public');
        return $data;
    }
public function show(Formations $formation){
   $f= $formation->etudiants()->get();
    return view('admin.formation.show',
    [
        'etud'=>$f
    ]);
}
}
