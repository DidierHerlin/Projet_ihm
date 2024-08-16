<?php

namespace App\Http\Controllers;

use App\Models\billets;
use Illuminate\Http\Request;

class BilletsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('/billet/billet');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/billet/ajout_billet');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(billets $billets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(billets $billets)
    {
        return view ('/billet/modifier_billet',['billets'=>$billets]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, billets $billets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(billets $billets)
    {
        //
    }
}
