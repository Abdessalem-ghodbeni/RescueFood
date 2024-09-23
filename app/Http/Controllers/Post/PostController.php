<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers\Controller;
use App\Models\Poste;
use App\Models\Blog;


use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create($blog_id)
    {
        return view('association.Post.AddPost', ['blogId' => $blog_id]); // Remplacez 'votre_vue_dajout' par le nom de votre vue
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu_poste' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blog_id' => 'required|exists:blogs,id', // Validation pour s'assurer que le blog_id existe
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post', 'public');
        }

        Poste::create([
            'titre' => $validatedData['titre'],
            'contenu_poste' => $validatedData['contenu_poste'],
            'image' => $imagePath,
            'blog_id' => $validatedData['blog_id'], // Ajout du blog_id
        ]);

        // Redirection après l'ajout
        return redirect()->route('blogs.show', $validatedData['blog_id'])
            ->with('success', 'Poste ajouté avec succès!');

    }

}
