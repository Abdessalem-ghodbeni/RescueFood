@extends('admin.adminDashboard')

@section('content')
    <div class="container">


        <div class="col-xl-9">
            <div class="row g-4 mb-4">
                <h3 class="text-center">Liste des blogs</h3>

                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <!-- Blog image (optionnel si disponible) -->
                            <img src="path_to_blog_image" class="card-img-top" alt="Image de blog">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->nom_blog }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($blog->sujet, 100) }}</p>
                                <a href="{{ route('blogs.showadmin', $blog->id) }}" class="btn btn-info">Voir plus</a>

                                <!-- Bouton de suppression -->
                                <form action="{{ route('blogs.destroyadmin', $blog->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce blog ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                    <a href="{{ route('blogs.editadmin', $blog->id) }}" class="btn btn-warning">Modifier</a>

                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
