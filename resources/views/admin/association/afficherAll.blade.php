@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h3>All Associations</h3>

        <!-- Check if there are any associations -->
        @if($associations->isEmpty())
            <p>No associations found.</p>
        @else
            <!-- Table for displaying associations -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($associations as $association)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $association->name }}</td>
                        <td>{{ $association->email }}</td>
                        <td>{{ $association->numero_telphone }}</td>
                        <td>{{ $association->adresse }}</td>
                        <td>{{ $association->categorie ? $association->categorie->type_categorie : 'Non classée' }}</td>
                        <td>
                            <!-- Edit and Delete buttons -->
                            <a href="{{ route('association.editAll', $association->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('association.destroyAll', $association->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="" class="btn btn-primary">Blogs</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
