@extends('admin.adminDashboard')

@section('content')
    <div class="container">


        <section class="pt-0">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="mb-4 text-center">Modifier le Poste</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Formulaire pour éditer le poste -->
                        <form action="{{ route('post.updateadmin', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="titre" class="form-label">Titre</label>
                                <input type="text" name="titre" id="titre" class="form-control" value="{{ $post->titre }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="contenu_poste" class="form-label">Contenu</label>
                                <textarea name="contenu_poste" id="contenu_poste" class="form-control" rows="4" required>{{ $post->contenu_poste }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="image" class="form-label">Image (optionnelle)</label>
                                <input type="file" name="image" id="image" class="form-control">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="Image du poste" class="img-fluid mt-3">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
