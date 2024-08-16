<?php

namespace App\Http\Controllers;

use App\Models\vehicules;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VehiculesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicules=vehicules::all();
        return view('/vehicule/vehicule',['vehicules'=>$vehicules]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/vehicule/ajout_vehicule');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'immatricule' => 'required',
            'marque' => 'required',
            'modele' => 'required',
            'nbr_place' => 'required',
        ]);

        // Create a new conducteur instance with validated data
        $vehicules = vehicules::create($validatedData);

        // Redirect to the conducteur route
        return redirect()->route('vehicule');
    }

    /**
     * Display the specified resource.
     */
    public function show(vehicules $vehicules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehicules=vehicules::find($id);
        return view('/vehicule/modifier_vehicule', ['vehicules' => $vehicules]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vehicules $vehicules)
    {
        $request->validate([
            'id'=>'required',
            'immatricule'=>'required',
            'marque'=>'required',
            'modele'=>'required',
            'nbr_place'=>'required'
        ]);

        $vehicules = vehicules::find($request->id);
        $vehicules->immatricule = $request->immatricule;
        $vehicules->marque = $request->marque;
        $vehicules->modele = $request->modele;
        $vehicules->nbr_place = $request->nbr_place;
        $vehicules->save();

        return redirect()->route('vehicule', ['id' => $vehicules->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicules=vehicules::find($id);
        $vehicules->delete();
        return redirect()->route('vehicule');
    }
}
