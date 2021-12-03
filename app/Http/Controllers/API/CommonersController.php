<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Commoners;
use Illuminate\Http\Request;

class CommonersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comm = Commoners::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($comm);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // La validation de données
        $this->validate($request, [
        'commonersFirstName' => 'required|max:100',
        'commonersLastName' => 'nullable'
        ]);

        // On crée un nouvel utilisateur
        $comm = new Commoners();
        $comm->commonersFirstName = $request->commonersFirstName;
        $comm->commonersFirstName = $request->commonersFirstName;
    
        $comm->save();

        // On retourne les informations du nouvel utilisateur en JSON
        return response()->json($comm, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commoners  $commoners
     * @return \Illuminate\Http\Response
     */
    public function show(Commoners $commoners)
    {
        return response()->json($commoners);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commoners  $commoners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commoners $commoners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commoners  $commoners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commoners $commoners)
    {
        //
    }
}
