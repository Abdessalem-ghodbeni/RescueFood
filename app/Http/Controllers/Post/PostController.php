<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function create($blog_id)
    {
        return view('association.Post.AddPost', ['blogId' => $blog_id]);
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
            log::info('Image uploaded to: '.$imagePath);
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

    public function destroy($id)
    {
        $poste = Poste::find($id);

        if (! $poste) {
            return redirect()->back()->with('error', 'Poste non trouvé.');
        }

        if ($poste->image) {
            \Storage::delete('public/'.$poste->image);
        }

        $poste->delete();

        return redirect()->back()->with('success', 'Poste supprimé avec succès.');
    }

    public function edit($id)
    {
        $post = Poste::find($id);
        if (! $post) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found');
        }

        return view('association.Post.UpdatePost', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu_poste' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $poste = Poste::findOrFail($id);

        // Mise à jour des champs
        $poste->titre = $validatedData['titre'];
        $poste->contenu_poste = $validatedData['contenu_poste'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post', 'public');
            $poste->image = $imagePath;
        }

        $poste->save();

        // Redirection vers la page du blog avec un message de succès
        return redirect()->route('blogs.show', $poste->blog_id)
            ->with('success', 'Poste mis à jour avec succès!');
    }



    public function createadmin($blog_id)
    {
        return view('admin.association.Posts.AddPost', ['blogId' => $blog_id]);
    }

    public function storeadmin(Request $request)
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
            log::info('Image uploaded to: ' . $imagePath);
        }

        Poste::create([
            'titre' => $validatedData['titre'],
            'contenu_poste' => $validatedData['contenu_poste'],
            'image' => $imagePath,
            'blog_id' => $validatedData['blog_id'], // Ajout du blog_id
        ]);

        // Redirection après l'ajout
        return redirect()->route('blogs.showadmin', ['id'=>$validatedData['blog_id']])
            ->with('success', 'Poste ajouté avec succès!');

    }

    public function destroyadmin($id)
    {
        $poste = Poste::find($id);

        if (!$poste) {
            return redirect()->back()->with('error', 'Poste non trouvé.');
        }

        if ($poste->image) {
            \Storage::delete('public/' . $poste->image);
        }

        $poste->delete();

        return redirect()->back()->with('success', 'Poste supprimé avec succès.');
    }

    public function editadmin($id)
    {
        $post = Poste::find($id);
        if (!$post) {
            return redirect()->route('blogs.index')->with('error', 'Blog not found');
        }

        return view('admin.association.Posts.UpdatePost', compact('post'));
    }

    public function updateadmin(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu_poste' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $poste = Poste::findOrFail($id);

        // Mise à jour des champs
        $poste->titre = $validatedData['titre'];
        $poste->contenu_poste = $validatedData['contenu_poste'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post', 'public');
            $poste->image = $imagePath;
        }

        $poste->save();

        // Redirection vers la page du blog avec un message de succès
        return redirect()->route('blogs.showadmin', ['id'=>$poste->blog_id])
            ->with('success', 'Poste ajouté avec succès!');

    }





}
