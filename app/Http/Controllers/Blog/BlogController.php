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
        return redirect()->route('blogs.store')->with('success', 'Blog ajouté avec succès.');
    }




    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.store')->with('success', 'Blog supprimé avec succès.');
    }


    public function show($id)
    {
        // Récupérer le blog par son id avec une pagination des postes
        $blog = Blog::with('postes')->find($id);

        if (!$blog) {
            return redirect()->route('blogs.affiche')->with('error', 'Blog not found');
        }

        $postes = $blog->postes()->paginate(3);

        // Passer les données à la vue
        return view('association.Blog.OneBlog', compact('blog', 'postes'));
    }






    public function edit($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found');
        }

        return view('association.Blog.UpdateBlog', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found');
        }

        $validated = $request->validate([
            'nom_blog' => 'required|max:255',
            'objectif' => 'required',
            'sujet'=>'required'
        ]);

        // Mettre à jour le blog
        $blog->nom_blog = $validated['nom_blog'];
        $blog->objectif = $validated['objectif'];
        $blog->sujet= $validated['sujet'];
        $blog->save();


        // Rediriger avec un message de succès
        return redirect()->route('blogs.affiche')->with('success', 'Blog modifié avec succès.');
    }


    public function getBlogByAssociationId($associationId)
    {
        $blogs = Blog::where('association_id', $associationId)->get();


        return view('admin.association.Blogs.AfficheBlog', compact('blogs'));
    }



    public function createBlog($association_id)
    {
        return view('admin.association.Blogs.AddBlog', compact('association_id'));
    }

    public function storeBlog(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom_blog' => 'required|string|max:255',
            'sujet' => 'required|string|max:500',
            'association_id' => 'required|exists:associations,id',
            'objectif' => 'nullable|string|max:500', // Validation pour l'objectif
        ]);

        // Création du blog
        Blog::create([
            'nom_blog' => $validatedData['nom_blog'],
            'sujet' => $validatedData['sujet'],
            'association_id' => $validatedData['association_id'],
            'objectif' => $validatedData['objectif'], // Ajout de l'objectif
        ]);

        // Redirection après la création
        return redirect()->route('blogs.getblogbyid', $validatedData['association_id'])
            ->with('success', 'Blog ajouté avec succès!');
    }

}
