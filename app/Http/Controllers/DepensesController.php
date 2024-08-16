<?php

namespace App\Http\Controllers;

use App\Models\depenses;
use App\Models\vehicules;
use App\Models\conducteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;


class DepensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depenses = DB::table('depenses')
        ->leftJoin('conducteurs', 'conducteurs.id', '=', 'depenses.id_conducteur')
        ->leftJoin('vehicules', 'vehicules.id', '=', 'depenses.id_vehicule') // Modification ici
        ->select('depenses.*', 'conducteurs.nom_conducteur', 'vehicules.immatricule')
        ->get();

    // dd($recettes);
        $vehicules=vehicules::all();
        $conducteur=conducteur::all();
        return view('/depense/depense',['depenses'=>$depenses,'vehicules'=>$vehicules,'conducteur'=>$conducteur]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicules=vehicules::all();
        $conducteur=conducteur::all();
        return view('/depense/ajout_depense',['vehicules'=>$vehicules,'conducteur'=>$conducteur]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_depense' => 'required',
            'id_conducteur' => 'required',
            'id_vehicule' => 'required',
            'type_depense' => 'required',
            'montant_depense' => 'required',
        ]);

        $depenses = depenses::create($validatedData);
        return redirect()->route('depense');
    }

    /**
     * Display the specified resource.
     */
    public function show(depenses $depenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $depenses = depenses ::find ($id);
        $conducteur=conducteur::all();
        $vehicules=vehicules::all();
        return view('/depense/modifier_depense',['depenses' =>$depenses,'conducteur'=>$conducteur,'vehicules'=>$vehicules]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'date_depense'=>'required',
            'id_conducteur'=>'required',
            'id_vehicule'=>'required',
            'type_depense'=>'required',
            'montant_depense'=>'required'
        ]);

        $depenses = depenses::find($request->id);
        $depenses->date_depense = $request->date_depense;
        $depenses->id_conducteur = $request->id_conducteur;
        $depenses->id_vehicule = $request->id_vehicule;
        $depenses->type_depense = $request->type_depense;
        $depenses->montant_depense = $request->montant_depense;
        $depenses->save();

        return redirect()->route('depense', ['id' => $depenses->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $depenses=depenses::find($id);
        $depenses->delete();
        return redirect()->route('depense');
    }
}
