<?php

namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;
use App\Models\Poste;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function affiche()
    {
        $blogs = Blog::all();

        return view('association.Blog.allBlog', compact('blogs'));
    }


    public function create()
    {
        return view('association.Blog.AddBlog'); // Retourne la vue du formulaire
    }

    // Traiter la soumission du formulaire et ajouter un blog
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom_blog' => 'required|max:255',
            'objectif' => 'required',
            'sujet'=> 'required'
        ]);

        // Créer un nouveau blog
        Blog::create([
            'nom_blog' => $request->nom_blog,
            'objectif' => $request->objectif,
            'sujet'=> $request->sujet
        ]);

        // Rediriger vers la liste des blogs avec un message de succès
        return redirect()->route('blogs.index')->with('success', 'Blog ajouté avec succès.');
    }
}
