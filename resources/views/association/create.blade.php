@extends('association.associationDashboard')

@section('content')
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <h3>Create a New Association</h3>
                    <div class="card p-4">
                        <form action="{{ route('association.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nom de l'association</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom de l'association" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez l'email" required>
                            </div>

                            <div class="mb-3">
                                <label for="numero_telphone" class="form-label">Telephone</label>
                                <input type="tel" class="form-control" id="numero_telphone" name="numero_telphone" placeholder="Entrez le numéro de téléphone" required>
                            </div>

                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse de l'association</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrez l'adresse de l'association" required>
                            </div>

                            <div class="mb-3">
                                <label for="categorie_id" class="form-label">Catégorie</label>
                                <select class="form-select" id="categorie_id" name="categorie_id" required>
                                    <option value="">Sélectionnez une catégorie</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->type_categorie }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Créer l'Association</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
