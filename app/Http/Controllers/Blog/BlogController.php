<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function affiche(Request $request, $associationId)
    {
        $search = $request->query('search');

        if ($search) {
            $blogs = Blog::where('association_id', $associationId)
                ->where(function ($query) use ($search) {
                    $query->where('nom_blog', 'LIKE', "%{$search}%")
                        ->orWhere('sujet', 'LIKE', "%{$search}%")
                        ->orWhere('objectif', 'LIKE', "%{$search}%");  // Ajouter d'autres champs si nécessaire
                })
                ->get();
        } else {
            $blogs = Blog::where('association_id', $associationId)->get();
        }

        return view('association.Blog.allBlog', compact('blogs', 'associationId'));
    }

    public function create($association_id)
    {
        return view('association.Blog.AddBlog', compact('association_id')); // Retourne la vue du formulaire
    }

    // Traiter la soumission du formulaire et ajouter un blog
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_blog' => 'required|string|max:255',
            'sujet' => 'required|string|max:500',
            'association_id' => 'required|exists:associations,id',
            'objectif' => 'nullable|string|max:500', // Validation pour l'objectif
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog', 'public');
        }

        // Création du blog
        Blog::create([
            'nom_blog' => $validatedData['nom_blog'],
            'sujet' => $validatedData['sujet'],
            'association_id' => $validatedData['association_id'],
            'objectif' => $validatedData['objectif'], // Ajout de l'objectif
            'image' => $imagePath,
        ]);

        // Rediriger vers la liste des blogs de l'association avec un message de succès
        return redirect()->route('blogs.affiche', $validatedData['association_id'])->with('success', 'Blog ajouté avec succès.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $associationId = $blog->association_id; // Récupérer l'association liée
        $blog->delete();

        // Rediriger vers la page listant les blogs de cette association
        return redirect()->route('blogs.affiche', $associationId)->with('success', 'Blog supprimé avec succès.');
    }

    public function show($id)
    {
        // Récupérer le blog par son id avec une pagination des postes
        $blog = Blog::with('postes')->find($id);

        if (! $blog) {
            return redirect()->route('blogs.affiche')->with('error', 'Blog not found');
        }

        $postes = $blog->postes()->paginate(3);

        // Passer les données à la vue
        return view('association.Blog.OneBlog', compact('blog', 'postes'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found');
        }

        return view('association.Blog.UpdateBlog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom_blog' => 'required|string|alpha|min:3|max:255',
            'sujet' => 'required|string|alpha|min:3|max:500',
            'objectif' => 'nullable|string|alpha|min:3|max:500',
        ]);

        // Récupérer le blog à mettre à jour
        $blog = Blog::findOrFail($id);

        // Mise à jour des champs
        $blog->nom_blog = $validatedData['nom_blog'];
        $blog->sujet = $validatedData['sujet'];
        $blog->objectif = $validatedData['objectif'] ?? $blog->objectif;

        // Vérifier si une nouvelle image a été téléchargée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($blog->image) {
                Storage::delete($blog->image); // Suppression de l'image existante
            }

            // Stocker la nouvelle image
            $path = $request->file('image')->store('blog', 'public'); // Définir le chemin de stockage
            $blog->image = $path; // Mettre à jour le chemin de l'image dans la base de données
        }

        // Enregistrer les modifications
        $blog->save();

        // Rediriger vers la page listant les blogs de l'association
        return redirect()->route('blogs.affiche', $blog->association_id)->with('success', 'Blog modifié avec succès.');
    }

    public function getBlogByAssociationId(Request $request, $associationId)
    {
        $search = $request->query('search');

        if ($search) {
            $blogs = Blog::where('association_id', $associationId)
                ->where(function ($query) use ($search) {
                    $query->where('nom_blog', 'LIKE', "%{$search}%")
                        ->orWhere('sujet', 'LIKE', "%{$search}%")
                        ->orWhere('objectif', 'LIKE', "%{$search}%");  // Ajouter d'autres champs si nécessaire
                })
                ->get();
        } else {
            $blogs = Blog::where('association_id', $associationId)->get();
        }

        // Passer $associationId à la vue en plus de $blogs
        return view('admin.association.Blogs.AfficheBlog', compact('blogs', 'associationId'));
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
            'objectif' => 'required|string|max:500',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog', 'public');
        }

        // Création du blog
        Blog::create([
            'nom_blog' => $validatedData['nom_blog'],
            'sujet' => $validatedData['sujet'],
            'association_id' => $validatedData['association_id'],
            'objectif' => $validatedData['objectif'], // Ajout de l'objectif
            'image' => $imagePath,

        ]);

        // Redirection après la création
        return redirect()->route('blogs.getblogbyid', $validatedData['association_id'])
            ->with('success', 'Blog ajouté avec succès!');
    }

    // Méthode pour afficher le formulaire de modification
    public function editadmin($id)
    {
        // Récupérer le blog à modifier
        $blog = Blog::findOrFail($id);

        // Retourner la vue avec les données du blog
        return view('admin.association.Blogs.EditBlog', compact('blog'));
    }

    // Méthode pour gérer la mise à jour d'un blog
    public function updateadmin(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom_blog' => 'required|string|max:255',
            'sujet' => 'required|string|max:500',
            'objectif' => 'nullable|string|max:500',
            'association_id' => 'required|exists:associations,id',
            'image' => 'nullable|image', // Validation de l'image
        ]);

        // Récupérer le blog à mettre à jour
        $blog = Blog::findOrFail($id);

        // Mise à jour des champs
        $blog->nom_blog = $validatedData['nom_blog'];
        $blog->sujet = $validatedData['sujet'];
        $blog->objectif = $validatedData['objectif'] ?? $blog->objectif;
        $blog->association_id = $validatedData['association_id'];

        // Vérifier si une nouvelle image a été téléchargée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($blog->image) {
                Storage::delete($blog->image); // Suppression de l'image existante
            }

            // Stocker la nouvelle image
            $path = $request->file('image')->store('blog', 'public'); // Définir le chemin de stockage
            $blog->image = $path; // Mettre à jour le chemin de l'image dans la base de données
        }

        // Enregistrer les modifications
        $blog->save();

        // Redirection après la mise à jour
        return redirect()->route('blogs.getblogbyid', $blog->association_id)
            ->with('success', 'Blog mis à jour avec succès!');
    }

    public function destroyadmin($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.getblogbyid', $blog->association_id);

    }

    public function showadmin($id)
    {
        // Récupérer le blog par son id avec une pagination des postes
        $blog = Blog::with('postes')->find($id);

        if (! $blog) {
            return redirect()->route('blogs.affiche')->with('error', 'Blog not found');
        }

        $postes = $blog->postes()->paginate(3);

        // Passer les données à la vue
        return view('admin.association.Blogs.OneBlog', compact('blog', 'postes'));

    }
}
