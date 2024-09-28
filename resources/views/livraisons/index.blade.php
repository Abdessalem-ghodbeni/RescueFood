
    <h1>Liste des livraisons</h1>
    <a href="{{ route('livraisons.create') }}" class="btn btn-primary">Créer une nouvelle livraison</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date de Livraison</th>
                <th>Destination</th>
                <th>Numéro de Livraison</th>
                <th>Utilisateur</th>
                <th>Trajet</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livraisons as $livraison)
                <tr>
                    <td>{{ $livraison->id }}</td>
                    <td>{{ $livraison->date_de_livraison }}</td>
                    <td>{{ $livraison->destination }}</td>
                    <td>{{ $livraison->numero_livraison }}</td>
                    <td>{{ $livraison->user->name }}</td>
                    <td>{{ $livraison->trajet->name }}</td>
                    <td>
                        <a href="{{ route('livraisons.show', $livraison->id) }}">Voir</a>
                        <a href="{{ route('livraisons.edit', $livraison->id) }}">Modifier</a>

                        <form action="{{ route('livraisons.destroy', $livraison->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
