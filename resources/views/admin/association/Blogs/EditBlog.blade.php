@extends('admin.adminDashboard')

@section('content')
    <div class="container">


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="mb-4 text-center">Modifier le Blog</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulaire pour éditer le blog -->
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" name="nom_blog" id="title" class="form-control" value="{{ $blog->nom_blog }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Objectif</label>
                            <textarea name="objectif" id="content" class="form-control" rows="4" required>{{ $blog->objectif }}</textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label for="sujet" class="form-label">Sujet</label>
                            <textarea name="sujet" id="sujet" class="form-control" rows="4" required>{{ $blog->sujet }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
