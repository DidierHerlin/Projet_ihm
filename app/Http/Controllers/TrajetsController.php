<?php

namespace App\Http\Controllers;

use App\Models\trajets;
use Illuminate\Http\Request;

class TrajetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets=trajets::all();
        return view('/trajet/trajet',['trajets'=>$trajets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/trajet/ajout_trajet');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ville_depart' => 'required',
            'ville_arriver' => 'required',
            'distance' => 'required',
            'montant_trajet' => 'required',
        ]);
        $trajets = trajets::create($validatedData);
        return redirect()->route('trajet');
    }

    /**
     * Display the specified resource.
     */
    public function show(trajets $trajets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trajets= trajets :: find ($id);
        return view('/trajet/modifier_trajet', ['trajets' => $trajets]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, trajets $trajets)
    {
        $request->validate([
            'id'=>'required',
            'ville_depart'=>'required',
            'ville_arriver'=>'required',
            'distance'=>'required',
            'montant_trajet'=>'required'
        ]);

        $trajets = trajets::find($request->id);
        $trajets->ville_depart = $request->ville_depart;
        $trajets->ville_arriver = $request->ville_arriver;
        $trajets->distance = $request->distance;
        $trajets->montant_trajet = $request->montant_trajet;
        $trajets->save();

        return redirect()->route('trajet', ['id' => $trajets->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trajets=trajets::find($id);
        $trajets->delete();
        return redirect()->route('trajet');

    }
}
