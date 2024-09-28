{{-- resources/views/dons/index.blade.php --}}
@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h1>Liste des Dons</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('dons.create') }}" class="btn btn-primary mb-3">Ajouter un Don</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Donneur</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dons as $don)
                <tr>
                    <td>{{ $don->id }}</td>
                    <td>{{ $don->description }}</td>
                    <td>{{ $don->restaurant->Restorant ?? $don->association->name }}</td>
                    <td>{{ $don->date_don }}</td>
                    <td>
                        <a href="{{ route('dons.edit', $don->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('dons.destroy', $don->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce don ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
