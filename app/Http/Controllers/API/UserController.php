<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // On récupère tous les utilisateurs
        $users = User::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($users);
    }

    public function store(Request $request)
    {
        // La validation de données
        $this->validate($request, [
           'userFirstName' => 'required|max:100',
           'userLastName' => 'required|max:100',
           'userMail' => 'required|max:100',
           'userPassword' => 'required|max:100',
           'userPrivilege' => 'required|max:10'
        ]);

        // On crée un nouvel utilisateur
        $user = new User();
        
        $user->userFirstName = $request->userFirstName;
        $user->userLastName = $request->userLastName;
        $user->userMail = $request->userMail;
        $user->userPassword = bcrypt($request->userPassword);
        $user->userPrivilege = $request->userPrivilege;

        $user->save();

        // On retourne les informations du nouvel utilisateur en JSON
        return response()->json($user, 201);
    }


    public function show(User $user)
    {
        // On retourne les informations de l'utilisateur en JSON
        return response()->json($user);
    }

    public function update(Request $request, User $user)
    {
        // La validation de données
        $this->validate($request, [
           'name' => 'required|max:100',
           'email' => 'required|email',
           'password' => 'required|min:8'
        ]);

        // On modifie les informations de l'utilisateur
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        // On retourne la réponse JSON
        return response()->json();
    }

    public function destroy(User $user)
    {
        // On supprime l'utilisateur
        $user->delete();

        // On retourne la réponse JSON
        return response()->json();
    }
}