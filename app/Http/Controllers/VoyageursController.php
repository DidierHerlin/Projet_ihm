<?php

namespace App\Http\Controllers;

use App\Models\voyageurs;
use Illuminate\Http\Request;

class VoyageursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voyageurs=voyageurs::all();
        return view('/voyageur/voyageur',['voyageurs'=>$voyageurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('/voyageur/ajout_voyageur');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_voyageur' => 'required',
            'tel_voyageur' => 'required',
            'adresse_voyageur' => 'required'
        ]);

        // Create a new conducteur instance with validated data
        $voyageurs = voyageurs::create($validatedData);

        // Redirect to the conducteur route
        return redirect()->route('voyageur');
    }

    /**
     * Display the specified resource.
     */
    public function show(voyageurs $voyageurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $voyageurs = voyageurs :: find($id);
        return view ('/voyageur/modifier_voyageur',['voyageurs'=>$voyageurs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'nom_voyageur'=>'required',
            'tel_voyageur'=>'required',
            'adresse_voyageur'=>'required'
        ]);

        $voyageurs = voyageurs::find($request->id);
        $voyageurs->nom_voyageur = $request->nom_voyageur;
        $voyageurs->tel_voyageur = $request->tel_voyageur;
        $voyageurs->adresse_voyageur = $request->adresse_voyageur;
        $voyageurs->save();

        return redirect()->route('voyageur', ['id' => $voyageurs->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $voyageurs=voyageurs::find($id);
        $voyageurs->delete();
        return redirect()->route('voyageur');
    }
}
