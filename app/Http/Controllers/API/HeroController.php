<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // On récupère tous les utilisateurs
        $heros = Hero::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($heros);
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
            'heroFirstName' => 'required|max:100',
            'heroLastName' => 'required|max:100'
         ]);
 
         // On crée un nouvel utilisateur
         $hero = new User([
             'heroFirstName' => $request->fname,
             'heroLastName' => $request->lname
         ]);
 
         $hero->save();
 
         // On retourne les informations du nouvel utilisateur en JSON
         return response()->json($hero, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        // On retourne les informations de l'utilisateur en JSON
        return response()->json($hero);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
