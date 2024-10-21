@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h3>Ajouter un nouveau blog</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Formulaire pour créer un blog -->
        <form action="{{ route('blogs.storeblog') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nom du blog -->
            <div class="form-group">
                <label for="nom_blog">Nom du blog</label>
                <input type="text" name="nom_blog" id="nom_blog" class="form-control" >
            </div>

            <!-- Sujet du blog -->
            <div class="form-group">
                <label for="sujet">Sujet</label>
                <textarea name="sujet" id="sujet" class="form-control" rows="3" ></textarea>
            </div>

            <div class="form-group">
                <label for="objectif">Objectif</label>
                <textarea name="objectif" id="objectif" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image du poste</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" >
            </div>

            <!-- Association ID (caché) -->
            <input type="hidden" name="association_id" value="{{ $association_id }}">

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-success">Ajouter le blog</button>
        </form>
    </div>
@endsection
