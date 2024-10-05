@extends('admin.adminDashboard')

@section('content')
    <div class="container">

        <div class="col-xl-9">
            <div class="row g-4 mb-4">
                <div class="container mt-5">
                    <h1>Ajouter un nouveau Poste</h1>

                    <!-- Afficher les erreurs de validation -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulaire d'ajout de poste -->
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data"> <!-- Changez ici -->
                        @csrf
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre du poste</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="contenu_poste" class="form-label">Contenu du poste</label>
                            <textarea class="form-control" id="contenu_poste" name="contenu_poste" rows="5" required>{{ old('contenu_poste') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image du poste</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label for="blog_id" class="form-label">ID du blog associé</label>
                            <input type="hidden" name="blog_id" value="{{ $blogId }}"> <!-- Assurez-vous de passer $blogId à la vue -->
                            <p>{{ $blogId }}</p> <!-- Optionnel, pour afficher l'ID du blog associé -->
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>


            </div>
        </div>

    </div>
@endsection
