@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <!-- Formulaire de recherche -->
        <form id="searchForm" action="{{ route('blogs.getblogbyid', $associationId) }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Rechercher un blog" value="{{ request()->query('search') }}" onkeyup="submitSearch()">
            </div>
        </form>

        <div class="col-xl-9">
            <div class="row g-4 mb-4">
                <h3 class="text-center">Liste des blogs</h3>

                @if($blogs->isEmpty())
                    <p class="text-center">Aucun blog trouvé pour ce critère de recherche.</p>
                @else
                    @foreach ($blogs as $blog)
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100">
                                <!-- Blog image (optionnel si disponible) -->
                                <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="Image de blog">
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
                @endif
            </div>
        </div>
    </div>

    <script>
        function submitSearch() {
            document.getElementById('searchForm').submit();
        }
    </script>
@endsection
