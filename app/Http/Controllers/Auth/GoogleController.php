<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // Rediriger l'utilisateur vers Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Gérer la réponse de Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Vérifier si l'utilisateur existe déjà
            $user = User::where('email', $googleUser->email)->first();

            if (! $user) {
                // Si l'utilisateur n'existe pas, créer un nouveau
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => $googleUser->password,
                    'role' => Role::Livreur,
                ]);
            }

            // Authentifier l'utilisateur
            Auth::login($user);

            return redirect()->route('home')->with('success', 'Connexion réussie avec Google');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Échec de la connexion Google');
        }
    }
}
