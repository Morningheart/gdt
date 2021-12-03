<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // On récupère tous les utilisateurs
        $post = Post::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($post);
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
        'postText' => 'required|max:100',
        'postDoc' => 'required|max:100',
        'postImg' => 'required|max:100',
        'postDate' => 'required|max:10',
        'postLocation'  => 'required|max:10',
        'user_id' => 'required|max:10'
        ]);

        // On crée un nouvel utilisateur
        $post = new Post();
        $post->postText = $request->postText;
        $post->postDoc = $request->postDoc;
        $post->postImg = $request->postImg;
        $post->postDate =  $request->postDate;
        $post->postLocation  =  $request->postLocation;
        $post->user_id =  $request->user_id;

        $post->save();

        // On retourne les informations du nouvel utilisateur en JSON
        return response()->json($post, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // On retourne les informations du post en JSON
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        // On retourne la réponse JSON
        return response()->json();
    }
}
