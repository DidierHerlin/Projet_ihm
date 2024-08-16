<?php

namespace App\Http\Controllers;

use App\Models\recettes;
use App\Models\vehicules;
use App\Models\conducteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recettes = DB::table('recettes')
            ->leftJoin('conducteurs', 'conducteurs.id', '=', 'recettes.conducteur_id')
            ->leftJoin('vehicules', 'vehicules.id', '=', 'recettes.vehicule_id') // Modification ici
            ->select('recettes.*', 'conducteurs.nom_conducteur', 'vehicules.immatricule')
            ->get();

        // dd($recettes);
        $vehicules=vehicules::all();
         $conducteur=conducteur::all();
        return view('/recettes/recette',['recettes'=>$recettes,'vehicules'=>$vehicules,'conducteur'=>$conducteur]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $conducteur=conducteur::all();
        $vehicules=vehicules::all();
        return view('/recettes/ajout_recette',['vehicules'=>$vehicules,'conducteur'=>$conducteur]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'conducteur_id' => 'required',
            'vehicule_id' => 'required',
            'date_recette' => 'required',
            'montant_recette' => 'required',
        ]);

        $recettes = recettes::create($validatedData);
        return redirect()->route('recette');
    }

    /**
     * Display the specified resource.
     */
    public function show(recette $recette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $recettes=recettes::find($id);
        $conducteur=conducteur::all();
        $vehicules=vehicules::all();
        return view('/recettes/modifier_recette',['recettes'=>$recettes,'conducteur'=>$conducteur,'vehicules'=>$vehicules]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'conducteur_id'=>'required',
            'vehicule_id'=>'required',
            'date_recette'=>'required',
            'montant_recette'=>'required'
        ]);

        $recettes = recettes::find($request->id);
        $recettes->conducteur_id = $request->conducteur_id;
        $recettes->vehicule_id = $request->vehicule_id;
        $recettes->date_recette = $request->date_recette;
        $recettes->montant_recette = $request->montant_recette;
        $recettes->save();

        return redirect()->route('recette', ['id' => $recettes->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recettes = recettes::find($id);
        $recettes->delete();
        return redirect()->route('recette');
    }
}
