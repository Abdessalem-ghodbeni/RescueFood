@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h3>Modifier le blog</h3>

        <!-- Formulaire pour modifier un blog -->
        <form action="{{ route('blogs.updateadmin', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nom du blog -->
            <div class="form-group">
                <label for="nom_blog">Nom du blog</label>
                <input type="text" name="nom_blog" id="nom_blog" class="form-control" value="{{ $blog->nom_blog }}" required>
            </div>

            <!-- Sujet du blog -->
            <div class="form-group">
                <label for="sujet">Sujet</label>
                <textarea name="sujet" id="sujet" class="form-control" rows="3" required>{{ $blog->sujet }}</textarea>
            </div>

            <!-- Objectif du blog (optionnel) -->
            <div class="form-group">
                <label for="objectif">Objectif</label>
                <textarea name="objectif" id="objectif" class="form-control" rows="3">{{ $blog->objectif }}</textarea>
            </div>

            <!-- Association ID (caché) -->
            <input type="hidden" name="association_id" value="{{ $blog->association_id }}">

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-success">Mettre à jour le blog</button>
        </form>
    </div>
@endsection
