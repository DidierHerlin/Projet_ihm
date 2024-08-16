<?php

namespace App\Http\Controllers;

use App\Models\conducteur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ConducteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conducteurs=conducteur::all();
        return view ('/conducteur/conducteur',['conducteurs'=>$conducteurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/conducteur/ajout_conducteur');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'cin' => 'required',
            'nom_conducteur' => 'required',
            'telephone' => 'required',
            'adresse' => 'required'
        ]);

        // Create a new conducteur instance with validated data
        $conducteurs = conducteur::create($validatedData);

        // Redirect to the conducteur route
        return redirect()->route('conducteur');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $conducteurs = conducteur::find($id);
        return view('/conducteur/modifier_conducteur', ['conducteurs' => $conducteurs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'cin'=>'required',
            'nom_conducteur'=>'required',
            'telephone'=>'required',
            'adresse'=>'required'
        ]);

        $conducteurs = conducteur::find($request->id);
        $conducteurs->nom_conducteur = $request->nom_conducteur;
        $conducteurs->telephone = $request->telephone;
        $conducteurs->adresse = $request->adresse;
        $conducteurs->save();

        return redirect()->route('conducteur', ['id' => $conducteurs->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
        {
            $conducteurs = Conducteur::find($id);
            if (!$conducteurs) {
                return redirect()->route('conducteur')->with('error', 'Conducteur non trouvé.');
            }

            $conducteurs->delete();

            return redirect()->route('conducteur')->with('success', 'Conducteur supprimé avec succès.');
        }

}
