@extends('admin.adminDashboard')

@section('content')
    <div class="container">

        <div class="col-xl-9">
            <div class="row g-4 mb-4">
                <div class="container">
                    <h1>{{ $blog->nom_blog }}</h1>
                    <p>{{ $blog->sujet }}</p>
                    <h2>Posts</h2>
                    <div class="row">
                        @if($postes->count() > 0)
                            <div class="row">
                                @foreach($postes as $poste)
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img src="{{ asset('storage/' . $poste->image) }}" class="card-img-top" alt="{{ $poste->titre }}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $poste->titre }}</h5>
                                                <p class="card-text">{{ $poste->contenu_poste }}</p>
                                                <form action="{{ route('posts.destroy', $poste->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce poste ?')">
                                                        Supprimer
                                                    </button>
                                                </form>
                                                <a href="{{ route('post.edit', $poste->id) }}" class="btn btn-warning">Modifier</a>


                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Liens de pagination (à n'afficher qu'une seule fois) -->
                            <div class="mt-3">
                                {{ $postes->links() }} <!-- Affiche les liens de pagination -->
                            </div>
                        @else
                            <p>Aucun poste disponible pour ce blog.</p>
                        @endif





                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
