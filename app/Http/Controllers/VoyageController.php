<?php

namespace App\Http\Controllers;

use App\Models\voyage;
use Illuminate\Http\Request;
use App\Models\vehicules;
use App\Models\conducteur;
use App\Models\trajets;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $voyages = DB::table('voyages')
        ->leftJoin('conducteurs', 'conducteurs.id', '=', 'voyages.id_conducteur')
        ->leftJoin('vehicules', 'vehicules.id', '=', 'voyages.id_vehicule')
        ->leftJoin('trajets', 'trajets.id', '=', 'voyages.id_trajet')
        ->select('voyages.*', 'conducteurs.nom_conducteur', 'vehicules.immatricule','trajets.*')
        ->get();

        // dd($voyages);

    // dd($recettes);
        $vehicules=vehicules::all();
        $conducteur=conducteur::all();
        $trajets= trajets::all();
            return view('/voyage/voyage',['voyages'=>$voyages,'vehicules'=>$vehicules,'conducteur'=>$conducteur,'trajets'=>$trajets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicules=vehicules::all();
        $conducteur=conducteur::all();
        $trajets= trajets::all();
        return view('/voyage/ajout_voyage',['vehicules'=>$vehicules,'conducteur'=>$conducteur,'trajets'=>$trajets]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_voyage' => 'required',
            'nombre_voageur' => 'required',
            'id_conducteur' => 'required',
            'id_vehicule' => 'required',
            'id_trajet' => 'required'
        ]);


        $voyages = voyage::create($validatedData);
        return redirect()->route('voyage');
    }

    /**
     * Display the specified resource.
     */
    public function show(voyage $voyage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $voyages=voyage::find($id);
        $vehicules=vehicules::all();
        $conducteur=conducteur::all();
        $trajets= trajets::all();
        return view('/voyage/modifier_voyage',['voyages'=>$voyages,'vehicules'=>$vehicules,'vehicules'=>$vehicules,'conducteur'=>$conducteur,'trajets'=>$trajets]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'date_voyage'=>'required',
            'nombre_voageur'=>'required',
            'id_conducteur'=>'required',
            'id_vehicule'=>'required',
            'id_trajet'=>'required'
        ]);

        $voyages = voyage::find($request->id);
        $voyages->date_voyage = $request->date_voyage;
        $voyages->nombre_voageur = $request->nombre_voageur;
        $voyages->id_conducteur = $request->id_conducteur;
        $voyages->id_vehicule = $request->id_vehicule;
        $voyages->id_trajet = $request->id_trajet;
        $voyages->save();

        return redirect()->route('voyage', ['id' => $voyages->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $voyages=voyage::find($id);
        $voyages->delete();
        return redirect()->route('voyage');
    }
}
