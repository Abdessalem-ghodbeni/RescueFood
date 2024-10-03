{{-- resources/views/donataires/index.blade.php --}}
@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h1>Liste des Donataires</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('donataires.create') }}" class="btn btn-primary mb-3">Ajouter un Donataire</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Dons</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donataires as $donataire)
                <tr>
                    <td>{{ $donataire->id }}</td>
                    <td>{{ $donataire->name }}</td>
                    <td>{{ $donataire->email }}</td>
                    <td>{{ $donataire->phone }}</td>
                    <td>{{ $donataire->don->description }}</td>
                    <td>
                        <a href="{{ route('donataires.edit', $donataire->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('donataires.destroy', $donataire->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce donataire ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
